@component('mail::message')
    # Welcome to our Newsletter

    Dear {{ $email }},
    we look forward to communicating more with you. For more details visit our Website.
    @component('mail::button', ['url' => 'http://127.0.0.1:8000/'])
        Blog
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
