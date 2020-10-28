@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <x-authentication-card>
        <h1 class="title is-4 has-text-grey-light mb-4">
            {{ __('Login') }}
        </h1>

        <x-validation-errors />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="field">
                <label for="email" class="label">
                    {{ __('Email') }}
                </label>
                <div class="control">
                    <input class="input" type="email" id="email" name="email" value="{{ old('email') }}" required autofocus />
                </div>
            </div>

            <div class="field">
                <label for="password" class="label">
                    {{ __('Password') }}
                </label>
                <div class="control">
                    <input class="input" type="password" id="password" name="password" required autocomplete="current-password" />
                </div>
            </div>

            <div class="field">
                <div class="control">
                    <label for="remember" class="checkbox">
                        <input type="checkbox" id="remember" name="remember" />
                        {{ __('Remember me') }}
                    </label>
                </div>
            </div>

            <div class="buttons is-right">
                @if (Route::has('password.request'))
                    <a class="button is-text-grey" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
                <button class="button is-dark" type="submit">
                    {{ __('Login') }}
                </button>
            </div>
        </form>
    </x-authentication-card>
@endsection
