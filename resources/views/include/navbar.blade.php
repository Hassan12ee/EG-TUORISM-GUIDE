<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->

    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">

</head>
<body>

    <header>
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                    <a class="navbar-brand" href="{{ route('index') }}">
                        <img src="{{ URL::asset('img/Project Logo-1.png') }}" alt="logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ route('index') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('Tourplaces') }}">Tour places</a>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('hotels') }}">Hotels</a>
                            </li>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('restaurants') }}">Restaurants</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('ourplans') }}">Our plans</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('hotels') }}">Activities</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Info
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('hotels') }}">About us</a></li>
                                    <li><a class="dropdown-item" href="{{ route('hotels') }}">Contact us</a></li>

                                </ul>
                        </ul>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- Left Side Of Navbar -->
                            <ul class="navbar-nav me-auto">

                            </ul>

                            <!-- Right Side Of Navbar -->
                            <ul class="navbar-nav ms-auto">
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
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"
                                            role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!---------------------------------------المحتوى------------------------------------>
    <main class="py-4">
        @yield('content')
    </main>
    <!---------------------------------------------------------------------------------->
    <!----------------------------------------footer------------------------------------>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h4>About Us</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tristique velit a dui tristique,
                        nec viverra lorem eleifend.</p>
                </div>
                <div class="col-md-3">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li><a href="{{ route('Tourplaces') }}">Tour places</a></li>
                        <li><a href="{{ route('hotels') }}">Hotels</a></li>
                        <li><a href="{{ route('restaurants') }}">Restaurants</a></li>
                        <li><a href="{{ route('ourplans') }}">Our plans</a></li>
                        <li><a href="{{ route('ourplans') }}">Activities</a></li>

                    </ul>
                </div>
                <div class="col-md-3">
                    <h4>Contact Us</h4>
                    <p>Email: hassan123.hhnn@gmail.com<br>Phone: 01013056706</p>
                </div>
            </div>
        </div>
    </footer>
    <!--------------------------------------------------------------------------------->

    <script src="{{ Url::asset('js/bootstrap.bundle.min.js') }}"></script>
    
    <script src="{{ Url::asset('js/main.js') }}"></script>


</body>

</html>
