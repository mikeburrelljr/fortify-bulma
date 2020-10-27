@extends('layouts.app')

@section('content')
    <x-validation-errors />

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <div class="field">
            <label for="password" class="label">
                {{ __('Password') }}
            </label>
            <div class="control">
                <input type="password" id="password" name="password" required autocomplete="current-password" />
            </div>
        </div>

        <div class="buttons">
            <button class="button is-primary" type="submit">
                {{ __('Confirm Password') }}
            </button>
        </div>

        @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
        @endif
    </form>
@endsection
