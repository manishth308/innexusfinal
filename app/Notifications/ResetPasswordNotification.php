<?php

namespace App\Notifications;

use Illuminate\Auth\Notifications\ResetPassword as BaseResetPasswordNotification;
use Illuminate\Notifications\Messages\MailMessage;

/**
 * Only ever fires for a genuine self-service "forgot password" request -
 * Filament's built-in request-password-reset page on either panel, or
 * anywhere else in the app that calls Password::sendResetLink(). The
 * brand-new-blogger invite path never touches this class: it sends
 * App\Mail\BloggerWelcomeInvite directly instead (see
 * BloggerApplicationsTable::approve()), precisely because Laravel's
 * password broker has no way to tell "you forgot your password" and
 * "you were just approved and need to set one for the first time" apart
 * on its own - both would otherwise fire this exact same notification.
 *
 * Reuses the parent class's own resetUrl() so the link is built and
 * validated exactly the way Laravel's default notification does; only the
 * subject/copy is corrected here.
 */
class ResetPasswordNotification extends BaseResetPasswordNotification
{
    public function toMail($notifiable): MailMessage
    {
        $url = $this->resetUrl($notifiable);

        return (new MailMessage)
            ->subject('Reset your '.config('app.name', 'IntechNexus').' password')
            ->greeting('Hello!')
            ->line('You are receiving this email because we received a password reset request for your account.')
            ->action('Reset Password', $url)
            ->line('This password reset link will expire in 60 minutes.')
            ->line('If you did not request a password reset, no further action is required.');
    }
}
