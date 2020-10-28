@extends('layouts.app')

@section('content')
    <x-authentication-card>
        <div class="block mb-5">
            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
        </div>

        <div class="field is-grouped is-right">
            <div class="control">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button class="button is-text-grey" type="submit">
                        {{ __('Logout') }}
                    </button>
                </form>
            </div>

            <div class="control">
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf

                    <button class="button is-dark" type="submit">
                        {{ __('Resend Verification Email') }}
                    </button>
                </form>
            </div>
        </div>
    </x-authentication-card>
@endsection
