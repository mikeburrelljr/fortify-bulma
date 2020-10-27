<form method="POST" action="{{ route('user-profile-information.update') }}">
    @csrf
    @method('PUT')

    <div class="field">
        <label for="name" class="label">
            {{ __('Name') }}
        </label>
        <div class="control">
            <input type="text" id="name" name="name" value="{{ old('name') ?? auth()->user()->name }}" required autofocus autocomplete="name" />
        </div>
    </div>

    <div class="field">
        <label for="email" class="label">
            {{ __('Email') }}
        </label>
        <div class="control">
            <input type="email" id="email" name="email" value="{{ old('email') ?? auth()->user()->email }}" required autofocus />
        </div>
    </div>

    <div class="buttons">
        <button class="button is-primary" type="submit">
            {{ __('Update Profile') }}
        </button>
    </div>
</form>

<hr>
