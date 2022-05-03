@extends('layouts.app')
@section('content')
<div class="overflow-hidden vh-100 d-flex align-items-center justify-content-around"
    style="background-image: url('img/background-home.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">

    <div  class="image_box align-self-start pt-5 cat">
        <img  src="img/cat.png" class="img-fluid">
    </div>
    <div class="image_box">
        <img src="img/logo.png" height="300" class="img-fluid">
        
    </div>
    <div  class="image_box align-self-end pb-5">
        <img  src="img/cats.png" class="img-fluid">
       
    </div>
    
    <a href="{{ route('download') }}">
        <img  class="windows" height="70" src="img/windows.png">
    </a>

    <i class="bi bi-mouse fs-4 scroll"></i>
</div>

<div class="container text-white">
    <h1 class="text-center mt-5 display-4">El juego más financiado jamás en kickstarter</h1>
    <p class="mt-5  fs-5">
        Recauda $10,000 en KickStarter y vende alrededor de 1,000 unidades. Hoy, apenas tres días después de que
        comenzara la campaña, ya han recaudado más de 3 millones de dólares.

    </p>
    <img src="img/kickstarter.jpg" class="mt-5 img-fluid">
    <p class="mt-5  fs-5">
        En total, Exploding Kittens recaudó más de $8,7 millones de más de 219 000 patrocinadores. Hoy, lo
        sostiene
        el récord del proyecto número 1 con más respaldo, así como el proyecto número 10 con más fondos en la historia
        de Kickstarter.
    </p>
    
</div>

<div class="bg-danger mt-5">
    <div class="container text-white fs-5">
        <div class="row">
            <div class="col-md-6 col-lg-5 ml-auto d-flex align-items-center mt-4 mt-md-0">
                <div>
                    <h2>Kitty, kitty, kitty... BOOM!</h2>
                    <p class="margin-top-s">
                        Los jugadores se turnan para sacar cartas hasta que alguien saca una carta explosiva
                        y
                        pierde el juego.</p>
                </div>
            </div>
            <div class="col-md-6">
                <img src="img/ingame.png" class="img-fluid p-3">
            </div>
        </div>
    </div>
</div>

<div class="text-white text-center mt-5 mb-5">
    <h2>¡Descárguelo, instálelo y juegue en línea ahora!</h2>
    <p class="margin-top-s fs-5">
        Al hacer clic <a href="{{ route('download') }}"class="text-warning">aquí</a>, será redirigido a la página de descarga.</p>
</div>

@endsection