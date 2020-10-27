<nav x-data="{ hamburgerMenuIsOpen: false }" class="navbar is-transparent is-spaced" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="{{ route('home') }}">
            {{ config('app.name', 'Laravel') }}
        </a>

        <div @click="hamburgerMenuIsOpen = !hamburgerMenuIsOpen" :class="{ 'is-active': hamburgerMenuIsOpen }" :aria-expanded="{ 'true': hamburgerMenuIsOpen }" class="navbar-burger burger" data-target="navbarElements" aria-label="menu" aria-expanded="false">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

    <div
        :class="{ 'is-active': hamburgerMenuIsOpen }"
        id="navbarElements"
        class="navbar-menu"
    >
        <div class="navbar-start">
            <!-- Primary Navigation Links -->
            <a href="/" class="navbar-item">
                {{ __('Home') }}
            </a>
        </div>

        <div class="navbar-end">
            <!-- Authentication Links -->
            @guest
                <div class="navbar-item">
                    <div class="buttons">
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="button is-primary">
                                {{ __('Sign up') }}
                            </a>
                        @endif

                        <a href="{{ route('login') }}" class="button is-light">
                            {{ __('Log in') }}
                        </a>
                    </div>
                </div>

            @else
                <div class="navbar-item has-dropdown">
                    <a class="navbar-link">
                        {{ Auth::user()->name }}
                    </a>

                    <div class="navbar-dropdown">
                        <a class="navbar-item">
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('Log out') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                            </form>
                        </a>
                    </div>
                </div>

            @endguest

        </div>
    </div>
</nav>
