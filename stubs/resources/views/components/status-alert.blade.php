@if (session('status'))
    @php
        $status = session('status');
        $statuses = [
          'profile-information-updated'        => __('Your profile information has been updated'),
          'password-updated'                   => __('Your password has been updated'),
          'recovery-codes-generated'           => __('Two Factor recovery codes have been regenerated'),
          'two-factor-authentication-enabled'  => __('Two factor authentication has been enabled'),
          'two-factor-authentication-disabled' => __('Two factor authentication has been disabled'),
          'verification-link-sent'             => __('A new verification link has been sent to the email address you provided during registration.')
        ];
        $message = array_key_exists($status, $statuses) ? $statuses[$status]: $status;
    @endphp

    <div x-data="{ statusIsVisible: true }">
        <div
            x-show="statusIsVisible"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 transform scale-90"
            x-transition:enter-end="opacity-100 transform scale-100"
            x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 transform scale-100"
            x-transition:leave-end="opacity-0 transform scale-90"
            class="notification is-success mb-5"
        >
            <button @click="statusIsVisible = false" class="delete"></button>
            {{ $message }}
        </div>
    </div>
@endif
