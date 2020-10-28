@extends('layouts.app')

@section('title', 'Reset Password')

@section('content')
    <x-authentication-card>
        <h1 class="title is-4 has-text-grey-light mb-4">
            {{ __('Reset Password') }}
        </h1>

        <x-validation-errors />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $request->route('token') }}" />

            <div class="field">
                <label for="email" class="label">
                    {{ __('Email') }}
                </label>
                <div class="control">
                    <input class="input" type="email" id="email" name="email" value="{{ old('email', $request->email) }}" required autofocus />
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
                <button class="button is-dark" type="submit">
                    {{ __('Reset Password') }}
                </button>
            </div>
        </form>
    </x-authentication-card>
@endsection
