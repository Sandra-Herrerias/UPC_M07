<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="img/logo.png" />

    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- <title>{{ config('app.name', 'Laravel') }}</title> -->
    <title>Exploding Kittens</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
<script src="{{ asset('js/main.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


    <script src="https://code.jquery.com/jquery-3.6.0.js"
    integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>

<link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

</head>

<body>
    <div id="app" class="d-flex flex-column min-vh-100">
    @if (\Request::route()->getName()!='login' && \Request::route()->getName()!='register')
        <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
           
            <div class="container">
                <a class="navbar-brand" href="{{ route('index') }}">
                    <img src="img/nav-logo.png" height="20" class="d-inline-block align-middle">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse justify-content-between align-items-center w-100"
                    id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto text-md-center text-left">
                    <li class="nav-item">
                            <a class="nav-link" href="{{ route('index') }}">{{ __('Home') }}</a>
                        </li>
                    <li class="nav-item">
                            <a class="nav-link" href="{{ route('aboutgame') }}">{{ __('Juego') }}</a>
                        </li>
                    <li class="nav-item">
                            <a class="nav-link" href="{{ route('aboutus') }}">{{ __('Sobre nosotros') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('ranking') }}">{{ __('Ranking') }}</a>
                        </li>
                        @if (!Auth::user() )
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('comments') }}">{{ __('Comentarios') }}</a>
                        </li>
                        @elseif (Auth::user() && Auth::user()->role == 'player')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('comments') }}">{{ __('Comentarios') }}</a>
                        </li>
                        @endif
                        @if (Auth::user() && Auth::user()->role == 'admin')
                            <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin_comments') }}">{{ __('CRUD Comentarios') }}</a>
                        </li>
                            @endif
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('technologies') }}">{{ __('Tecnologias') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('download') }}">{{ __('Descarga') }}</a>
                        </li>
                            
                    </ul>

                    <form class="d-flex">
                    <!-- {{ Auth::user() }} -->
                            @if (Auth::user())
                            <a href="{{ route('logout') }}"> <button type="button" class="btn btn-danger">
                            Cerrar sesión</button></a>
    @else

                            <a href="{{ route('login') }}"> <button type="button" class="btn btn-danger">
                            Inciar sesión</button></a>
                            @endif
                    </form>
                </div>
            </div>
        </nav>
    
        @endif
        <main>
            @yield('content')
        </main>
        @if (\Request::route()->getName()!='login' && \Request::route()->getName()!='register')
        <footer class="navbar-dark mt-auto bg-dark text-white">
        <br>
        <br>
        <div class=" d-flex flex-column">
            <img class="mx-auto" src="img/nav-logo.png" width="140">
            <br>
            <h4 *ngIf="!loggedIn" class="text-center">¿Estás lista?</h4>
            <br *ngIf="!loggedIn">
            <div *ngIf="!loggedIn" class="mx-auto">
                <button type="button" class="btn btn-danger"><a class="text-white text-decoration-none"
                        href="{{ route('register') }}">Registrarte</a></button>
            </div>
        </div>
        <br>
        <div class="d-flex justify-content-center">
            <a class="nav-link active text-white" href="{{ route('index') }}">Home</a>
            <a class="nav-link active text-white" href="{{ route('aboutgame') }}">Juego</a>
            <a class="nav-link active text-white" href="{{ route('aboutus') }}">Sobre nosotros</a>
            <a class="nav-link active text-white" href="{{ route('ranking') }}">Ranking</a>

            @if (!Auth::user() )
                            <a class="nav-link active text-white" href="{{ route('comments') }}">{{ __('Comentarios') }}</a>
                        @elseif (Auth::user() && Auth::user()->role == 'player')
                            <a class="nav-link active text-white" href="{{ route('comments') }}">{{ __('Comentarios') }}</a>
                        @endif
                        @if (Auth::user() && Auth::user()->role == 'admin')
                            <a class="nav-link active text-white" href="{{ route('admin_comments') }}">{{ __('CRUD Comentarios') }}</a>
                            @endif
            <a class="nav-link active text-white" href="{{ route('technologies') }}">Tecnologias</a>
            <a class="nav-link active text-white" href="{{ route('download') }}">Descargar</a>
            @if (Auth::user())
            <a class="nav-link active text-white" href="{{ route('logout') }}">Cerrar sesion</a>
            @else
            <a class="nav-link active text-white" href="{{ route('login') }}">Iniciar sesion</a>

            @endif
        </div>

        <div class="text-center text-muted fs-6 mt-3">
            Copyright © 2022. Exploding Kittens. All rights reserved.
        </div>
        <br>
        <br>
    </footer>
    @endif

    </div>
</body>

</html>
