@component('mail::message')
Hi {{ $application->first_name }},

Thanks for your interest in writing for InTech Nexus. After reviewing your
application, we won't be moving forward with it at this time.

This isn't necessarily a reflection of your work — we may simply not have
room for new contributors in your area right now. You're welcome to apply
again after a couple of days.

Thanks again for your interest,<br>
{{ config('app.name') }}
@endcomponent
