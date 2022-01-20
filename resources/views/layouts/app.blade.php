<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'MyTravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md shadow-sm sticky-top">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home') }}">
                    {{ config('app.name', 'MyTravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            @if (auth()->user()->role_name == 'admin')
                                <a class="nav-link" href="{{ route('addplace')}}">Add Destination</a>
                            @else
                                <a class="nav-link" href="{{ route('booking')}}">History</a>
                            @endif
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact')}}">Contact</a>
                        </li>
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                            @else
                            {{-- @if(Auth::user()->image)
                            <img class="image rounded-circle" src="{{asset('/storage/image/'.Auth::user()->image)}}" alt="profile_image">
                            @endif --}}
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="{{ route('profile') }}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @if (auth()->user()->role_name == 'customer')
                                    <a class="dropdown-item" href="{{ route('profile') }}">Profile</a>
                                @endif
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>

                            </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')

            <div class="footer">
                <div class="footer-policy">
                    <p>Privacy Policy | Tems of Use | Contact Support</p>
                    <p>All rights reserved by &copy; MyTravel</p>
                </div>
                <div class="footer-social">
                    <ul>
                        <li>
                            <a href="https://facebook.com">
                                <img src="/storage/image/facebook.png" alt="facebook">
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com">
                                <img src="/storage/image/twitter.png" alt="twitter">
                            </a>
                        </li>
                        <li>
                            <a href="https://instagram.com">
                                <img src="/storage/image/instagram.png" alt="instagram">
                            </a>
                        </li>
                        <li>
                            <a href="https://web.telegram.org/">
                                <img src="/storage/image/telegram.png" alt="telegram">
                            </a>
                        </li>
                        <li>
                            <a href="https://youtube.com">
                                <img src="/storage/image/youtube.png" alt="youtube">
                            </a>
                        </li>
                    </ul>
                </div>
                {{-- <div class="grid-footer">
                    <div class="footer-item">
                        <a href="{{ route('home') }}">MyTravel</a>
                        <p>We guarantee your satisfaction with our service</p>
                    </div>
                    <div class="footer-item">
                        <ul>
                            <li>
                                <a href="https://facebook.com">
                                    <img src="/storage/image/facebook.png" alt="facebook">
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com">
                                    <img src="/storage/image/twitter.png" alt="twitter">
                                </a>
                            </li>
                            <li>
                                <a href="https://instagram.com">
                                    <img src="/storage/image/instagram.png" alt="instagram">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div> --}}
                {{-- <p>&copy; MyTravel 2021</p> --}}
            </div>
        </main>

    </div>
</body>
</html>
