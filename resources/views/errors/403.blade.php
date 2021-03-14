@extends('errors.minimal')

@section('title', __('Forbidden'))
@section('code', '403')
@section('message', __($exception->getMessage() ?: 'Click on the following link to activate your account'))
@section('new_link')
    {{-- <div class='ver-link'>
        <p class="ita">Expired verification link! Click below to activate your account</p>
        <p class="act-link">
            <a href="{{ URL::temporarySignedRoute('confirm', now()->addMinutes(30), ['user' => $user->id]) }}">Get New
                Activation
                Link</a>
        <p> --}}
    </div>


@endsection
