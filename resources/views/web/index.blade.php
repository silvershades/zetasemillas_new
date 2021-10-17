<!DOCTYPE HTML>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}">

    <meta name="description" content="Zeta semillas">
    <link rel="canonical" href="http://zetasemillas.com.ar/"/>
{{--    <meta name="robots" content="index">--}}
<!--TODO ver tags -->
    <meta property="og:site_name" content="ZETA SEMILLAS">
    <meta property="og:title" content="ZETA SEMILLAS"/>
    <meta property="og:description" content="Zeta semillas"/>
    <meta property="og:image" content="{{asset('img/logo.png')}}">
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="http://zetasemillas.com.ar"/>
    <title>ZETA SEMILLAS</title>
    <link rel="icon" href="{{asset('img/favicon.png')}}">

    <link rel="stylesheet" href="{{asset('/bootstrap-5.0.0/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('/css/styles.css')}}?rnx=336">
    <link rel="stylesheet" href="{{asset('/fontawesome/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('/css/animations.css')}}">
    <link rel="stylesheet" href="{{asset('/css/resize.css')}}">


{{--    <link rel="preconnect" href="https://fonts.gstatic.com">--}}
{{--    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">--}}
{{--    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@300;400;500;700;900&display=swap" rel="stylesheet">--}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;700&display=swap" rel="stylesheet">

</head>
<body>

<main data-sticky-container>
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
    <div class="contenedor_navbar">
        @include("includes.navbar")
    </div>
    @yield('content')
</main>
<footer class="alert-secondary m-0" style="background-color: #eeeeee">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-4">
                <img src="{{asset("img/logo_negro.svg")}}" alt="logo zeta semillas" class="img-fluid">
            </div>
            <div class="col-sm-12 col-md-4">
                <ul>
                    <li><a class="text-secondary" href="{{route("index")}}"><i class="fas fa-angle-right"></i> Sobre nosotros</a></li>
                    <li><a class="text-secondary" href="{{route("index")}}"><i class="fas fa-angle-right"></i> Nuestros híbridos</a></li>
                    <li><a class="text-secondary" href="{{route("index")}}"><i class="fas fa-angle-right"></i> Productos</a></li>
                    <li><a class="text-secondary" href="{{route("index")}}"><i class="fas fa-angle-right"></i> Novedades</a></li>
                    <li><a class="text-secondary" href="{{route("index")}}"><i class="fas fa-angle-right"></i> Contacto</a></li>
                </ul>
            </div>
            <div class="col-sm-12 col-md-4">
                <ul>
                    <li><a class="text-secondary" href="{{route("index")}}"><i class="fab fa-twitter"></i> Nuestro Twitter</a></li>
                    <li><a class="text-secondary" href="{{route("index")}}"><i class="fab fa-youtube"></i> Nuestro Youtube</a></li>
                    <li><a class="text-secondary" href="{{route("index")}}"><i class="fab fa-whatsapp"></i> Nuestro Whatsapp</a></li>
                    <li><a class="text-secondary" href="{{route("index")}}"><i class="far fa-envelope"></i> Nuestro email</a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <p class="text-center text-secondary p-2 m-2">Copyright 2021 - ZETA SEMILLAS</p>
            </div>

        </div>
    </div>
</footer>
<script src="{{asset('js/jquery.js')}}"></script>
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"
    integrity="sha512-cdV6j5t5o24hkSciVrb8Ki6FveC2SgwGfLE31+ZQRHAeSRxYhAQskLkq3dLm8ZcWe1N3vBOEYmmbhzf7NTtFFQ=="
    crossorigin="anonymous"
></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/ScrollMagic.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/plugins/animation.gsap.js"></script>
<script src="{{asset('bootstrap-5.0.0/js/bootstrap.bundle.js')}}"></script>
<script src="{{asset('js/sticky.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>


</body>
</html>
