<style>
    .nav-link {
        font-size: 16px;
        font-weight: 500;
        text-transform: uppercase
    }
</style>
<nav class="navbar navbar-expand-lg" style="background-color: rgb(7, 161, 143);">
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
                    <a class="nav-link active" href="{{ route('index') }}" style="color: white;">Conditions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Vehiclerental</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About us</a>
                </li>
                @if (Route::has('login'))
                    <li class="nav-item">
                      
                        <a href="{{ route('login') }}" class="nav-link">
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
