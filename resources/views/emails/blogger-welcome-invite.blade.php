@component('mail::message')
# Welcome aboard!

Hi {{ $user->name }},

Good news — your application to write for {{ config('app.name', 'IntechNexus') }} has been approved. You're all set to start publishing.

Click below to set your password and get started:

@component('mail::button', ['url' => $resetUrl])
Set Your Password
@endcomponent

This link will expire in 60 minutes. If it expires before you get a chance to use it, use the "Forgot password" link on the blogger login page to get a new one.

Welcome to the team,<br>
{{ config('app.name', 'IntechNexus') }}
@endcomponent
