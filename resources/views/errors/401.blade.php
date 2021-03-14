@extends('errors.minimal')

@section('title', __('Unauthorized'))
@section('code', '401')
@section('message', __('Check email for verification link'))
@section('new_link')

    {{-- <a href="{{ URL::temporarySignedRoute('confirm', now()->addMinutes(30), ['user' => $user->id]) }}">Get New Activation
        Link</a> --}}


@endsection
