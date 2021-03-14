@component('mail::message')
    <h4>Dear {{ $user->name }},</h4>

    <p>Welcome to our application</p>

    @component('mail::button', ['url' => URL::temporarySignedRoute('confirm', now()->addMinutes(60), ['user' =>
        $user->id])])


        <p>Activate Account</p>

    @endcomponent

    <p>Thanks,</p>
    <b>Laravel</b>
@endcomponent
