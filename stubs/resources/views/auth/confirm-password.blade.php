@extends('layouts.app')

@section('title', 'Confirm Password')

@section('content')
    <x-authentication-card>
        <h1 class="title is-4 has-text-grey-light mb-4">
            {{ __('Confirm Password') }}
        </h1>

        <x-validation-errors />

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <div class="field mb-5">
                <label for="password" class="label">
                    {{ __('Password') }}
                </label>
                <div class="control">
                    <input class="input" type="password" id="password" name="password" required autocomplete="current-password" />
                </div>
            </div>

            <div class="buttons is-right">
                @if (Route::has('password.request'))
                    <a class="button is-text-grey" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
                <button class="button is-dark" type="submit">
                    {{ __('Confirm Password') }}
                </button>
            </div>
        </form>
    </x-authentication-card>
@endsection
