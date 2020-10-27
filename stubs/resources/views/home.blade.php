@extends('layouts.app')

@section('content')
    <div>You are logged in!</div>

    <form method="POST" action="{{ route('logout') }}">
        @csrf

        <div class="buttons">
            <button class="button is-outline is-dark" type="submit">
                {{ __('Logout') }}
            </button>
        </div>
    </form>

    <hr>

    @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updateProfileInformation()))
        @include('profile.update-profile-information-form')
    @endif

    @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
        @include('profile.update-password-form')
    @endif

    @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::twoFactorAuthentication()))
        @include('profile.two-factor-authentication-form')
    @endif
@endsection
