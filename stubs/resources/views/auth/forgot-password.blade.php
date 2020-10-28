@extends('layouts.app')

@section('content')
    <x-authentication-card>
        <div class="block">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <x-validation-errors />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="field mb-5">
                <label for="email" class="label">
                    {{ __('Email') }}
                </label>
                <div class="control">
                    <input class="input" type="email" id="email" name="email" value="{{ old('email') }}" required autofocus />
                </div>
            </div>

            <div class="buttons is-right">
                <button class="button is-dark" type="submit">
                    {{ __('Email Password Reset Link') }}
                </button>
            </div>
        </form>
    </x-authentication-card>
@endsection
