<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="img/logo.png" />

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

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


    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
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
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse justify-content-between align-items-center w-100" id="navbarSupportedContent">
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
        <footer class="text-center text-lg-start text-white" style="background-color: #212529">

            <div class=" d-flex flex-column py-3">
                <img class="mx-auto d-block d-sm-block d-md-none" src="assets/img/hlogo.png" width="170">
                <br>
                @if (!Auth::user())
                <h4  class="text-center">¿Estás listo?</h4>
                <br>
                <div class="mx-auto">
                    <button type="button" class="btn btn-danger" href="{{ route('register') }}">Registrate</button>
                </div>
                @endif
            </div>

            <section class="p-3">
                <div class="container text-center text-md-start">
                    <div class="row mt-3">

                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                            <h6 class="text-uppercase fw-bold">Exploding Kittens</h6>
                            <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #F28627; height: 2px" />
                            <p>
                                Exploding Kittens es un juego de cartas rápido y divertido en el
                                que tienes que asegurar tu supervivencia ante los temibles ¡gatos explosivos!
                            </p>
                        </div>
                        <div class="col-md-2 mx-auto mb-4 ">
                            <h6 class="text-uppercase fw-bold">Enlaces útiles</h6>
                            <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #F28627; height: 2px" />
                            <p>
                                <a href="{{ route('index') }}" class="text-white text-decoration-none">Home</a>
                            </p>
                            <p>
                                <a href="{{ route('aboutgame') }}" class="text-white text-decoration-none">Juego</a>
                            </p>
                            <p>
                                <a href="{{ route('aboutus') }}" class="text-white text-decoration-none">Sobre nosotros</a>
                            </p>
                            <p>
                                <a href="{{ route('ranking') }}" class="text-white text-decoration-none">Ranking</a>
                            </p>

                            @if (!Auth::user() )
                            <p>
                            <a class="nav-link active text-white" href="{{ route('comments') }}">{{ __('Comentarios') }}</a>
                            </p>
                        @elseif (Auth::user() && Auth::user()->role == 'player')
                        <p>
                            <a class="nav-link active text-white" href="{{ route('comments') }}">{{ __('Comentarios') }}</a>
                            </p>
                        @endif
                        @if (Auth::user() && Auth::user()->role == 'admin')
                            <p>
                                <a class="nav-link active text-white" href="{{ route('admin_comments') }}">{{ __('CRUD Comentarios') }}</a>
                                </p>
                            
                            @endif


                            <p>
                                <a href="{{ route('download') }}" class="text-white  text-decoration-none">Descargar</a>
                            </p>
                            <p>
                                <a href="{{ route('technologies') }}" class="text-white  text-decoration-none">Tecnologias</a>
                            </p>
                        </div>

                        <div class="col-md-3 mx-auto mb-md-0 mb-4">
                            <h6 class="text-uppercase fw-bold">Contacto</h6>
                            <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #F28627; height: 2px" />
                            <p><i class="bi bi-house-door-fill"></i> c/ Sant Pius X, núm 8. 08901 - L'Hospitalet de
                                Llobregat</p>
                            <p><i><img src="assets/img/Envelope-icon.svg" alt="sobre svg hecho en Illustator" height="12px"></i><a style="text-decoration: none; color: white;" href="mailto: alexmillonesr@gmail.com"> alexmillonesr@gmail.com</a></p>
                            <p><i><img src="assets/img/Envelope-icon.svg" alt="sobre svg hecho en Illustator" height="12px"></i><a style="text-decoration: none; color: white;" href="mailto: jordirocharocha@gmail.com"> jordirocharocha@gmail.com</a></p>
                            <p><i><img src="assets/img/Envelope-icon.svg" alt="sobre svg hecho en Illustator" height="12px"></i><a style="text-decoration: none; color: white;" href="mailto: sandra@gmail.com"> sandra@gmail.com</a></p>
                        </div>

                    </div>
                </div>
            </section>

            <div class="text-center pb-3 text-muted" style="background-color: #212529">
                Copyright © 2022. Exploding Kittens. All rights reserved.
            </div>

        </footer>
        @endif


    </div>
</body>

</html>