<style>
    .nav-link {
        font-size: 16px;
        font-weight: 500;
        text-transform: uppercase
    }
</style>
<nav class="navbar sticky-top navbar-expand-lg" style="background-color: rgb(7, 182, 161);">
    <div class="container">

        <a class="navbar-brand" href="{{ route('index') }}">
            <img src="{{ asset('images/logo/logo.png') }}" alt="Logo" width="55" height="35"
                class="d-inline-block align-text-top">
            <span style="color: #fff; font-size: 1.5rem; font-weight: 600;">Feelfree Transport</span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('index') ? 'active' : '' }}" href="{{ route('index') }}">Conditions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('faq') ? 'active' : '' }}" href="{{ route('faq') }}">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('vehicle') ? 'active' : '' }}" href="{{ route('vehicle') }}">Vehiclerental</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About us</a>
                </li>
               
            </ul>

            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                @if (Route::has('login'))
                <li class="nav-item">

                    <a href="{{ route('login') }}" class="nav-link btn btn-sm btn-outline-success" >
                        Login
                    </a>

                    {{-- @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="nav-link">
                            Register
                        </a>
                    @endif --}}

                </li>
            @endif
            </ul>
        </div>
    </div>
</nav>
