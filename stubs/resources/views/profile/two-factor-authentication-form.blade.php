@if(! auth()->user()->two_factor_secret)
    {{-- Enable 2FA --}}
    <form method="POST" action="{{ url('user/two-factor-authentication') }}">
        @csrf

        <div class="buttons">
            <button class="button is-outlined is-primary" type="submit">
                {{ __('Enable Two-Factor') }}
            </button>
        </div>
    </form>
@else
    {{-- Disable 2FA --}}
    <form method="POST" action="{{ url('user/two-factor-authentication') }}">
        @csrf
        @method('DELETE')

        <div class="buttons">
            <button class="button is-outlined is-danger" type="submit">
                {{ __('Disable Two-Factor') }}
            </button>
        </div>
    </form>

    @if(session('status') == 'two-factor-authentication-enabled')
        {{-- Show SVG QR Code, After Enabling 2FA --}}
        <div class="block">
            {{ __('Two factor authentication is now enabled. Scan the following QR code using your phone\'s authenticator application.') }}
        </div>

        <div>
            {!! auth()->user()->twoFactorQrCodeSvg() !!}
        </div>
    @endif

    {{-- Show 2FA Recovery Codes --}}
    <div class="block">
        {{ __('Store these recovery codes in a secure password manager. They can be used to recover access to your account if your two factor authentication device is lost.') }}
    </div>

    <div>
        @foreach (json_decode(decrypt(auth()->user()->two_factor_recovery_codes), true) as $code)
            <div>{{ $code }}</div>
        @endforeach
    </div>

    {{-- Regenerate 2FA Recovery Codes --}}
    <form method="POST" action="{{ url('user/two-factor-recovery-codes') }}">
        @csrf

        <div class="buttons">
            <button class="button is-outlined is-primary" type="submit">
                {{ __('Regenerate Recovery Codes') }}
            </button>
        </div>
    </form>
@endif
<hr>
