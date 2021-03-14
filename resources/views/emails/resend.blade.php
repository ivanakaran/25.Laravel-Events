<div class='container text-center'>
    <p class="ita">Expired verification link! Click below to activate your account</p>
    <p>
        <a href="{{ URL::temporarySignedRoute('confirm', now()->addMinutes(30), ['user' => $user->id]) }}">Get New
            Activation
            Link</a>
