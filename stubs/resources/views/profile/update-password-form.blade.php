<div class="box app-box has-background-white mb-5">
    <h1 class="title is-4 has-text-grey-light mb-4">
        {{ __('Update Password') }}
    </h1>
    <div class="block">
        {{ __('Ensure your account is using a long, random password to stay secure.') }}
    </div>

    <form method="POST" action="{{ route('user-password.update') }}">
        @csrf
        @method('PUT')

        <div class="field is-horizontal">
            <div class="field-label is-normal">
                <div class="field">
                    <label for="current_password" class="label">
                        {{ __('Current Password') }}
                    </label>
                </div>
            </div>
            <div class="field-body">
                <div class="field">
                    <div class="control">
                        <input class="input" type="password" id="current_password" name="current_password" required autocomplete="current-password" />
                    </div>
                </div>
            </div>
        </div>

        <div class="field is-horizontal">
            <div class="field-label is-normal">
                <div class="field">
                    <label for="password" class="label">
                        {{ __('Password') }}
                    </label>
                </div>
            </div>
            <div class="field-body">
                <div class="field">
                    <div class="control">
                        <input class="input" type="password" id="password" name="password" required autocomplete="new-password" />
                    </div>
                </div>
            </div>
        </div>

        <div class="field is-horizontal mb-5">
            <div class="field-label is-normal">
                <div class="field">
                    <label for="password_confirmation" class="label">
                        {{ __('Confirm Password') }}
                    </label>
                </div>
            </div>
            <div class="field-body">
                <div class="field">
                    <div class="control">
                        <input class="input" type="password" id="password_confirmation" name="password_confirmation" required autocomplete="new-password" />
                    </div>
                </div>
            </div>
        </div>

        <div class="buttons is-right">
            <button class="button is-dark" type="submit">
                {{ __('Save') }}
            </button>
        </div>
    </form>
</div>
