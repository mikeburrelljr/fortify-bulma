@extends('layouts.app')

@section('content')
    <div class="block">
        {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
    </div>

    <form method="POST" action="{{ route('verification.send') }}">
        @csrf

        <div class="buttons">
            <button class="button is-primary" type="submit">
                {{ __('Resend Verification Email') }}
            </button>
        </div>
    </form>

    <form method="POST" action="{{ route('logout') }}">
        @csrf

        <div class="buttons">
            <button class="button is-outlined is-dark" type="submit">
                {{ __('Logout') }}
            </button>
        </div>
    </form>
@endsection
