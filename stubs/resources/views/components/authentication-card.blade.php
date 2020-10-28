<div class="columns">
    <div class="column is-half is-offset-one-quarter">
        <div class="is-flex is-justify-content-center mb-5">
            <a href="{{ route('home') }}">
                <x-application-mark class="fill-current has-text-dark" width="38" height="56" />
            </a>
        </div>

        <div class="box is-white">
            {{ $slot }}
        </div>
    </div>
</div>
