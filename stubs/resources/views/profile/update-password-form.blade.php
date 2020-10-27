<form method="POST" action="{{ route('user-password.update') }}">
    @csrf
    @method('PUT')

    <div class="field">
        <label for="current_password" class="label">
            {{ __('Current Password') }}
        </label>
        <div class="control">
            <input type="password" id="current_password" name="current_password" required autocomplete="current-password" />
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
            {{ __('Save') }}
        </button>
    </div>
</form>

<hr>
