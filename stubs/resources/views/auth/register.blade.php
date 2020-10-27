@extends('layouts.app')

@section('content')
    <x-validation-errors />

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="field">
            <label for="name" class="label">
                {{ __('Name') }}
            </label>
            <div class="control">
                <input type="text" id="name" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" />
            </div>
        </div>

        <div class="field">
            <label for="email" class="label">
                {{ __('Email') }}
            </label>
            <div class="control">
                <input type="email" id="email" name="email" value="{{ old('email') }}" required />
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
            <div class="control">
                <label for="password_confirmation" class="checkbox">
                    <input type="password" id="password_confirmation" name="password_confirmation" required autocomplete="new-password" />
                    {{ __('Confirm Password') }}
                </label>
            </div>
        </div>

        <div class="buttons">
            <button class="button is-primary" type="submit">
                {{ __('Register') }}
            </button>
        </div>

        <div class="block">
            <a href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>
        </div>
    </form>
@endsection
