<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

/**
 * Sent exactly once, at the moment an admin approves a BloggerApplication
 * (see BloggerApplicationsTable::approve()) - deliberately separate from
 * the shared password-reset broker flow, so this never gets confused with
 * an ordinary "forgot password" email. See
 * App\Notifications\ResetPasswordNotification for that other path.
 */
class BloggerWelcomeInvite extends Mailable
{
    use Queueable, SerializesModels;

    public string $resetUrl;

    public function __construct(public User $user, string $token)
    {
        // Same route/token/email triple PasswordResetController::store()
        // already validates via Laravel's password broker - this
        // Mailable only changes how the link is delivered (subject/copy),
        // never where it leads or how it's checked. 'email' isn't a real
        // {placeholder} on this route, so route() appends it as a query
        // string automatically, matching the exact URL shape Laravel's
        // own notification already produces.
        $this->resetUrl = route('password.reset', [
            'token' => $token,
            'email' => $user->email,
        ]);
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Your '.config('app.name', 'IntechNexus').' blogger application was approved!',
        );
    }

    public function content(): Content
    {
        return new Content(
            markdown: 'emails.blogger-welcome-invite',
        );
    }
}
