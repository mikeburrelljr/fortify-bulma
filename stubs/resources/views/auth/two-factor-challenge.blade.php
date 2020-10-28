@extends('layouts.app')

@section('title', 'Two Factor Challenge')

@section('content')
    <x-authentication-card>
        <h1 class="title is-4 has-text-grey-light mb-4">
            {{ __('Two Factor Challenge') }}
        </h1>

        <x-validation-errors />

        <form x-data="{ recoveryCodeIsVisible: false }" method="POST" action="{{ url('/two-factor-challenge') }}">
            @csrf

            {{-- Authentication code: --}}
            <div
                x-show="! recoveryCodeIsVisible"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 transform scale-90"
                x-transition:enter-end="opacity-100 transform scale-100"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100 transform scale-100"
                x-transition:leave-end="opacity-0 transform scale-90"
            >
                <div class="block">
                    {{ __('Please confirm access to your account by entering the authentication code provided by your authenticator application.') }}
                </div>

                <div class="block">
                    {!! __('Need to enter an :emergencyRecoveryCode?', ['emergencyRecoverCode' => '<a @click="recoveryCodeIsVisible = true" href="#!">' . __('emergency recovery code') . '</a>']) !!}
                </div>

                <div class="field mb-5">
                    <label for="code" class="label">
                        {{ __('Code') }}
                    </label>
                    <div class="control">
                        <input class="input" type="text" id="code" name="code" autofocus autocomplete="one-time-code" />
                    </div>
                </div>
            </div>

            {{-- Recovery code: --}}
            <div
                x-show="recoveryCodeIsVisible"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 transform scale-90"
                x-transition:enter-end="opacity-100 transform scale-100"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100 transform scale-100"
                x-transition:leave-end="opacity-0 transform scale-90"
            >
                <div class="block">
                    {{ __('Please confirm access to your account by entering one of your emergency recovery codes.') }}
                </div>

                <div class="block">
                    {!! __('Trying to use an :authenticationCode?', ['authenticationCode' => '<a @click="recoveryCodeIsVisible = false" href="#!">' . __('authentication code provided by your authenticator application') . '</a>']) !!}
                </div>

                <div class="field mb-5">
                    <label for="recovery_code" class="label">
                        {{ __('Recovery Code') }}
                    </label>
                    <div class="control">
                        <input class="input" type="text" id="recovery_code" name="recovery_code" autocomplete="one-time-code" />
                    </div>
                </div>
            </div>

            <div class="buttons is-right">
                <button class="button is-dark" type="submit">
                    {{ __('Login') }}
                </button>
            </div>
        </form>
    </x-authentication-card>
@endsection
