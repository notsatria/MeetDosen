<nav class="navbar navbar-expand-lg navbar-light shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="#">Meet<span class="text-primary">Dosen</span></a>


        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport"
            aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ request()->is('home') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('/home') }}">Home</a>
                </li>
                <li class="nav-item {{ request()->is('home#about') ? 'active' : '' }}">
                    <a class="nav-link" href="">About Us</a>
                </li>
                <li class="nav-item {{ request()->is('home#dosen') ? 'active' : '' }}">
                    <a class="nav-link" href="#dosen">Dosen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#appointment">Appointment</a>
                </li>

                @if (Route::has('login'))
                    @auth
                        <li class="nav-item {{ request()->is('dosen-schedule') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ url('dosen-schedule') }}">Dosen Schedule</a>
                        </li>
                        <li class="nav-item {{ request()->is('my-appointment') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ url('my-appointment') }}">My Appointment</a>
                        </li>
                        <x-app-layout>

                        </x-app-layout>
                    @else
                        <li class="nav-item">
                            <a class="btn btn-primary ml-lg-3" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-primary ml-lg-3" href="{{ route('register') }}">Register</a>
                        </li>
                    @endauth
                @endif
            </ul>
        </div> <!-- .navbar-collapse -->
    </div> <!-- .container -->
</nav>
