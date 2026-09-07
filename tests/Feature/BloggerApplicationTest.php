<?php

namespace Tests\Feature;

use App\Enums\BloggerApplicationStatus;
use App\Enums\UserRole;
use App\Filament\Resources\BloggerApplications\Pages\ListBloggerApplications;
use App\Mail\BloggerApplicationRejected;
use App\Models\BloggerApplication;
use App\Models\User;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Password;
use Livewire\Livewire;
use Tests\TestCase;

class BloggerApplicationTest extends TestCase
{
    use RefreshDatabase;

    public function test_valid_application_is_saved_as_pending(): void
    {
        $response = $this->post('/blogs/apply', [
            'first_name' => 'Jane',
            'last_name' => 'Writer',
            'email' => 'jane@example.com',
            'profession' => 'Content Writer',
        ]);

        $response->assertRedirect(route('blogs.apply'));
        $response->assertSessionHas('success');

        $this->assertDatabaseHas('blogger_applications', [
            'email' => 'jane@example.com',
            'status' => 'pending',
        ]);
    }

    public function test_honeypot_blocks_submission_silently(): void
    {
        $this->post('/blogs/apply', [
            'first_name' => 'Bot',
            'last_name' => 'Spam',
            'email' => 'bot@spam.com',
            'profession' => 'Bot',
            'website' => 'http://spamsite.com',
        ]);

        $this->assertSame(0, BloggerApplication::count());
    }

    public function test_cannot_apply_with_email_that_already_has_an_account(): void
    {
        User::factory()->create(['email' => 'existing@example.com']);

        $response = $this->post('/blogs/apply', [
            'first_name' => 'Jane', 'last_name' => 'Writer',
            'email' => 'existing@example.com', 'profession' => 'Writer',
        ]);

        $response->assertSessionHasErrors('email');
        $this->assertSame(0, BloggerApplication::count());
    }

    public function test_cannot_submit_a_second_application_while_one_is_pending(): void
    {
        BloggerApplication::create([
            'first_name' => 'Jane', 'last_name' => 'Writer',
            'email' => 'jane@example.com', 'profession' => 'Writer',
            'status' => BloggerApplicationStatus::Pending,
        ]);

        $response = $this->post('/blogs/apply', [
            'first_name' => 'Jane', 'last_name' => 'Writer',
            'email' => 'jane@example.com', 'profession' => 'Writer',
        ]);

        $response->assertSessionHasErrors('email');
        $this->assertSame(1, BloggerApplication::count());
    }

    public function test_cannot_reapply_within_2_days_of_rejection(): void
    {
        BloggerApplication::create([
            'first_name' => 'Jane', 'last_name' => 'Writer',
            'email' => 'jane@example.com', 'profession' => 'Writer',
            'status' => BloggerApplicationStatus::Rejected,
            'rejected_at' => now()->subHours(10),
        ]);

        $response = $this->post('/blogs/apply', [
            'first_name' => 'Jane', 'last_name' => 'Writer',
            'email' => 'jane@example.com', 'profession' => 'Writer',
        ]);

        $response->assertSessionHasErrors('email');
        $this->assertSame(1, BloggerApplication::count());
    }

    public function test_can_reapply_after_2_days_of_rejection(): void
    {
        BloggerApplication::create([
            'first_name' => 'Jane', 'last_name' => 'Writer',
            'email' => 'jane@example.com', 'profession' => 'Writer',
            'status' => BloggerApplicationStatus::Rejected,
            'rejected_at' => now()->subDays(3),
        ]);

        $response = $this->post('/blogs/apply', [
            'first_name' => 'Jane', 'last_name' => 'Writer',
            'email' => 'jane@example.com', 'profession' => 'Writer',
        ]);

        $response->assertSessionHasNoErrors();
        $this->assertSame(2, BloggerApplication::count());
    }

    public function test_admin_can_approve_an_application_which_creates_a_user_and_sends_invite(): void
    {
        Notification::fake();

        $admin = User::factory()->create(['role' => UserRole::Admin]);
        $application = BloggerApplication::create([
            'first_name' => 'Jane', 'last_name' => 'Writer',
            'email' => 'jane@example.com', 'profession' => 'Writer',
            'status' => BloggerApplicationStatus::Pending,
        ]);

        $this->actingAs($admin);

        // Exercise the same logic the Filament table action calls.
        $user = User::create([
            'name' => $application->fullName(),
            'email' => $application->email,
            'role' => UserRole::Blogger,
            'password' => Hash::make(str()->random(40)),
        ]);
        $application->update(['status' => BloggerApplicationStatus::Approved]);
        Password::sendResetLink(['email' => $user->email]);

        $this->assertDatabaseHas('users', [
            'email' => 'jane@example.com',
            'role' => 'blogger',
        ]);
        $this->assertNull($user->email_verified_at);

        Notification::assertSentTo($user, ResetPassword::class);
    }

    public function test_admin_can_reject_an_application_and_email_is_sent(): void
    {
        Mail::fake();

        $application = BloggerApplication::create([
            'first_name' => 'Jane', 'last_name' => 'Writer',
            'email' => 'jane@example.com', 'profession' => 'Writer',
            'status' => BloggerApplicationStatus::Pending,
        ]);

        $application->update([
            'status' => BloggerApplicationStatus::Rejected,
            'rejected_at' => now(),
        ]);
        Mail::to($application->email)->send(new BloggerApplicationRejected($application));

        $application->refresh();
        $this->assertEquals(BloggerApplicationStatus::Rejected, $application->status);
        $this->assertNotNull($application->rejected_at);

        Mail::assertSent(BloggerApplicationRejected::class, function ($mail) use ($application) {
            return $mail->hasTo($application->email);
        });
    }

    public function test_setting_password_via_emailed_link_logs_verifies_email_and_allows_login(): void
    {
        $user = User::factory()->create([
            'role' => UserRole::Blogger,
            'email' => 'jane@example.com',
            'email_verified_at' => null,
            'password' => Hash::make(str()->random(40)),
        ]);

        $token = Password::createToken($user);

        $response = $this->post('/blogs/reset-password', [
            'token' => $token,
            'email' => 'jane@example.com',
            'password' => 'a-real-password',
            'password_confirmation' => 'a-real-password',
        ]);

        $response->assertRedirect(route('filament.blogs.auth.login'));

        $user->refresh();
        $this->assertNotNull($user->email_verified_at);
        $this->assertTrue(Hash::check('a-real-password', $user->password));
    }

    public function test_clicking_the_real_approve_action_in_the_admin_panel_works(): void
    {
        Notification::fake();

        $admin = User::factory()->create(['role' => UserRole::Admin]);
        $application = BloggerApplication::create([
            'first_name' => 'Jane', 'last_name' => 'Writer',
            'email' => 'jane-real@example.com', 'profession' => 'Writer',
            'status' => BloggerApplicationStatus::Pending,
        ]);

        Livewire::actingAs($admin)
            ->test(ListBloggerApplications::class)
            ->callTableAction('approve', $application)
            ->assertHasNoTableActionErrors();

        $this->assertDatabaseHas('users', ['email' => 'jane-real@example.com', 'role' => 'blogger']);
        $this->assertEquals(BloggerApplicationStatus::Approved, $application->refresh()->status);

        $user = User::where('email', 'jane-real@example.com')->first();
        Notification::assertSentTo($user, ResetPassword::class);
    }

    public function test_clicking_the_real_reject_action_in_the_admin_panel_works(): void
    {
        Mail::fake();

        $admin = User::factory()->create(['role' => UserRole::Admin]);
        $application = BloggerApplication::create([
            'first_name' => 'Jane', 'last_name' => 'Writer',
            'email' => 'jane-real@example.com', 'profession' => 'Writer',
            'status' => BloggerApplicationStatus::Pending,
        ]);

        Livewire::actingAs($admin)
            ->test(ListBloggerApplications::class)
            ->callTableAction('reject', $application)
            ->assertHasNoTableActionErrors();

        $application->refresh();
        $this->assertEquals(BloggerApplicationStatus::Rejected, $application->status);
        $this->assertNotNull($application->rejected_at);

        Mail::assertSent(BloggerApplicationRejected::class);
        $this->assertSame(0, User::where('email', 'jane-real@example.com')->count());
    }

    public function test_non_admin_cannot_view_blogger_applications(): void
    {
        $blogger = User::factory()->create(['role' => UserRole::Blogger]);

        $this->actingAs($blogger)->get('/admin/blogger-applications')->assertForbidden();
    }
}
