<?php

namespace Tests\Feature;

use App\Models\Lead;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ContactFormTest extends TestCase
{
    use RefreshDatabase;

    public function test_valid_submission_creates_a_lead(): void
    {
        $response = $this->post('/contact', [
            'name' => 'Jane Test',
            'company' => 'Acme Co',
            'email' => 'jane@example.com',
            'project_type' => 'build',
            'budget_range' => '15k-50k',
            'project_details' => 'We need a custom internal tool.',
        ]);

        $response->assertRedirect(route('contact'));
        $response->assertSessionHas('success');

        $this->assertDatabaseHas('leads', [
            'name' => 'Jane Test',
            'company' => 'Acme Co',
            'email' => 'jane@example.com',
            'project_type' => 'build',
            'budget_range' => '15k-50k',
            'message' => 'We need a custom internal tool.',
            'source' => 'contact_form',
            'status' => 'new',
        ]);
    }

    public function test_missing_required_fields_shows_validation_errors_and_saves_nothing(): void
    {
        $response = $this->post('/contact', [
            'name' => 'No Email Guy',
            'email' => '',
        ]);

        $response->assertSessionHasErrors('email');
        $this->assertSame(0, Lead::count());
    }

    public function test_honeypot_field_silently_blocks_submission(): void
    {
        $response = $this->post('/contact', [
            'name' => 'Bot',
            'email' => 'bot@spam.com',
            'website' => 'http://spamsite.com',
        ]);

        // Looks like success to whatever submitted it...
        $response->assertRedirect(route('contact'));
        $response->assertSessionHas('success');

        // ...but nothing was actually saved.
        $this->assertSame(0, Lead::count());
    }

    public function test_repeated_submissions_are_rate_limited(): void
    {
        for ($i = 0; $i < 5; $i++) {
            $this->post('/contact', [
                'name' => "Test {$i}",
                'email' => "test{$i}@example.com",
            ]);
        }

        $response = $this->post('/contact', [
            'name' => 'One Too Many',
            'email' => 'sixth@example.com',
        ]);

        $response->assertStatus(429);
    }
}
