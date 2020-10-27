@extends('layouts.app')

@section('content')
    <x-validation-errors />

    <form method="POST" action="{{ route('password.update') }}">
        @csrf

        <input type="hidden" name="token" value="{{ $request->route('token') }}" />

        <div class="field">
            <label for="email" class="label">
                {{ __('Email') }}
            </label>
            <div class="control">
                <input type="email" id="email" name="email" value="{{ old('email', $request->email) }}" required autofocus />
            </div>
        </div>

        <div class="field">
            <label for="password" class="label">
                {{ __('Password') }}
            </label>
            <div class="control">
                <input type="password" id="password" name="password" required autocomplete="new-password" />
            </div>
        </div>

        <div class="field">
            <label for="password_confirmation" class="label">
                {{ __('Confirm Password') }}
            </label>
            <div class="control">
                <input type="password" id="password_confirmation" name="password_confirmation" required autocomplete="new-password" />
            </div>
        </div>

        <div class="buttons">
            <button class="button is-primary" type="submit">
                {{ __('Reset Password') }}
            </button>
        </div>
    </form>
@endsection
