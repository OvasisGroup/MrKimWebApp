@component('mail::message')
# Verify Your Email Address

![Logo](https://your-logo-url.com/logo.png) <!-- Replace with your logo URL -->

Please click the button below to verify your email address.

@component('mail::button', ['url' => $url])
Verify Email
@endcomponent

If you did not create an account, no further action is required.

Thanks,<br>
{{ config('app.name') }}
@endcomponent
