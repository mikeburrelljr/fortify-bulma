<div class="box app-box has-background-white mb-5">
    <h1 class="title is-4 has-text-grey-light mb-4">
        {{ __('Profile Information') }}
    </h1>
    <div class="block">
        {{ __('Update your account\'s profile information and email address.') }}
    </div>

    <form method="POST" action="{{ route('user-profile-information.update') }}">
        @csrf
        @method('PUT')

        <div class="field is-horizontal">
            <div class="field-label is-normal">
                <div class="field">
                    <label for="name" class="label">
                        {{ __('Name') }}
                    </label>
                </div>
            </div>
            <div class="field-body">
                <div class="field">
                    <div class="control">
                        <input class="input" type="text" id="name" name="name" value="{{ old('name') ?? auth()->user()->name }}" required autofocus autocomplete="name" />
                    </div>
                </div>
            </div>
        </div>

        <div class="field is-horizontal mb-5">
            <div class="field-label is-normal">
                <div class="field">
                    <label for="email" class="label">
                        {{ __('Email') }}
                    </label>
                </div>
            </div>
            <div class="field-body">
                <div class="field">
                    <div class="control">
                        <input class="input" type="email" id="email" name="email" value="{{ old('email') ?? auth()->user()->email }}" required autofocus />
                    </div>
                </div>
            </div>
        </div>

        <div class="buttons is-right">
            <button class="button is-dark" type="submit">
                {{ __('Update Profile') }}
            </button>
        </div>
    </form>
</div>
