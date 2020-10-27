@extends('layouts.app')

@section('content')
    <x-validation-errors />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="field">
            <label for="email" class="label">
                {{ __('Email') }}
            </label>
            <div class="control">
                <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus />
            </div>
        </div>

        <div class="field">
            <label for="password" class="label">
                {{ __('Password') }}
            </label>
            <div class="control">
                <input type="password" id="password" name="password" required autocomplete="current-password" />
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

        <div class="buttons">
            <button class="button is-primary" type="submit">
                {{ __('Login') }}
            </button>
        </div>

        @if (Route::has('password.request'))
            <div class="block">
                <a href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            </div>
        @endif
    </form>
@endsection
