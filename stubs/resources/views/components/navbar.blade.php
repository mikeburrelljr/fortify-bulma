<nav x-data="{ hamburgerMenuIsOpen: false }" class="navbar is-white is-spaced is-transparent has-shadow" role="navigation" aria-label="main navigation">
    <div class="container">
        <div class="navbar-brand">
            <a class="navbar-item is-flex is-align-content-center" href="{{ route('home') }}">
                <x-application-mark class="fill-current has-text-primary" width="19" height="28" />
                <h1 class="title is-3 is-dark ml-2">
                    {{ config('app.name', 'Laravel') }}
                </h1>
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
    {{--            <a href="/" class="navbar-item">--}}
    {{--                {{ __('Home') }}--}}
    {{--            </a>--}}
            </div>

            <div class="navbar-end">
                <!-- Authentication Links -->
                @guest
                    <div class="navbar-item">
                        <div class="buttons">
                            <a href="{{ route('login') }}" class="button is-dark is-inverted">
                                {{ __('Login') }}
                            </a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="button is-primary">
                                    {{ __('Register') }}
                                </a>
                            @endif
                        </div>
                    </div>

                @else
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a href="#!" class="navbar-link">
                            {{ Auth::user()->name }}
                        </a>

                        <div class="navbar-dropdown is-boxed">
                            <a href="/user/profile" class="navbar-item">
                                {{ __('Manage Account') }}
                            </a>
                            <hr class="navbar-divider">
                            <a href="{{ route('logout') }}"
                               class="navbar-item"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('Log out') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                            </form>
                        </div>
                    </div>

                @endguest

            </div>
        </div>
    </div>
</nav>
