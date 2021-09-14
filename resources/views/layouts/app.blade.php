<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Zeta Semillas') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('bootstrap-5.0.0/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.css')}}">
    <!-- Styles -->
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/zeta_admin') }}">
                Zeta Semillas Admin
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
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
                        <li class="nav-item ">


                            <div class="" aria-labelledby="navbarDropdown">
                                <a class="nav-link" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">>
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('index') }}" target="_blank">> Ir a zetasemillas.com</a>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <div class="web_container">
            <div class="sidebar bg-light">
                @include('layouts.sidebar')
            </div>
            <div class="main_content">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <p class="bold">Ups, it appears that you encountered some errors</p>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @yield('content')
            </div>
        </div>
    </main>
</div>
</body>
<script src="{{asset('js/jquery.js')}}"></script>
<script>
    function submitThis(that) {
        $(that).parent().submit();
    }
</script>
</html>
