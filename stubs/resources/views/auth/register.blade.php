@extends('layouts.app')

@section('title', 'Register')

@section('content')
    <x-authentication-card>
        <h1 class="title is-4 has-text-grey-light mb-4">
            {{ __('Register') }}
        </h1>

        <x-validation-errors />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="field">
                <label for="name" class="label">
                    {{ __('Name') }}
                </label>
                <div class="control">
                    <input class="input" type="text" id="name" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" />
                </div>
            </div>

            <div class="field">
                <label for="email" class="label">
                    {{ __('Email') }}
                </label>
                <div class="control">
                    <input class="input" type="email" id="email" name="email" value="{{ old('email') }}" required />
                </div>
            </div>

            <div class="field">
                <label for="password" class="label">
                    {{ __('Password') }}
                </label>
                <div class="control">
                    <input class="input" type="password" id="password" name="password" required autocomplete="new-password" />
                </div>
            </div>

            <div class="field mb-5">
                <label for="password_confirmation" class="label">
                    {{ __('Confirm Password') }}
                </label>
                <div class="control">
                    <input class="input" type="password" id="password_confirmation" name="password_confirmation" required autocomplete="new-password" />
                </div>
            </div>

            <div class="buttons is-right">
                <a class="button is-text-grey" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
                <button class="button is-dark" type="submit">
                    {{ __('Register') }}
                </button>
            </div>
        </form>
    </x-authentication-card>
@endsection
