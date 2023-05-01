<x-mail::message>
### Your account is ready to use.

Please, use your email and the password below to login:

Username: {{ $email }}<br>
Password: {{ $password }}<br>

<a href="{{ route('login') }}">Login to your account</a><br>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
