@extends('layouts.app')
@section('content')
<div class="p-5" style="background-color: #F28627;">
  <h1 id="titulo-game" class="text-center display-1" class="align-self-end">Juego</h1>
  <img id="img-titulo" src="assets/img/kiten-game.png" alt="" height="150px">
</div>

<div id="como_jugar" class="container text-center p-5">
  <h2 class="text-center text-white display-4">CÓMO SE JUEGA</h2>
  <div class="row text-center justify-content-center text-white">
    <div class="col-lg-5 col-md-5 col-sm-12 order-sm-2 d-inline">
      <p class="fs-5">El juego consiste en una baraja de cartas con unos
        cuantos Exploding Kitten. Para jugar, se coloca la baraja
        bocabajo y los jugadores roban cartas por turnos hasta
        que a uno de ellos le sale un Exploding Kitten.</p>
      <p class="mt-3 fs-5">Cuando esto sucede, esa persona explota.
        El jugador se muere y queda eliminado de la partida.</p>
    </div>
    <div class="col-lg-3  col-md-4 col-sm-12 order-sm-3 d-inline">
      <img id="img-jugar-1" src="img/como-jugar-1.webp" height="300px">
    </div>
  </div>

  <div class="row text-center justify-content-center text-white">
    <div class="col-lg-5 col-md-5 col-sm-12 order-sm-4">
      <p class="fs-5">Este proceso continúa hasta que solo queda
        1 jugador, que será el ganador de la partida.
        Cuantas más cartas robes, mayores serán tus
        probabilidades de sacar un Exploding Kitten.</p>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-12 order-sm-5">
      <img src="img/como-jugar-2.png" height="100px">
    </div>
  </div>
</div>

<div class="bg-danger mt-5" style="background-image: url('img/barra-game.png'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
  <div class="container text-white fs-5">
    <div class="row">

      <div class="col-md-6">
        <img src="img/cartas-game.png" class="img-fluid p-3">
      </div>
      <div class="col-md-6 col-lg-5 ml-auto d-flex align-items-center mt-4 mt-md-0">
        <div>
          <p class="margin-top-s fs-1">
            EN POCAS PALABRAS <br> SI EXPLOTAS, <br> PIERDES.</p>
        </div>
      </div>

    </div>
  </div>
</div>

<div class="container text-white mt-5">
  <h2 class="text-center  display-4">Tipos de cartas</h2>
  <div id="tipos-cartas" class="row align-items-start">
    <div class="col">
      <a class="nav-link active" >Pasar</a>
    </div>
    <div class="col">
      <a class="nav-link active" >Ataca</a>
    </div>
    <div class="col">
      <a class="nav-link active" >Blind card</a>
    </div>
    <div class="col">
      <a class="nav-link active" >Desactiva</a>
    </div>
    <div class="col">
      <a class="nav-link active">Exploding Kitten</a>
    </div>
    <div class="col">
      <a class="nav-link active" >Favor</a>
    </div>
    <div class="col">
      <a class="nav-link active">Ver el futuro</a>
    </div>
    <div class="col">
      <a class="nav-link active">Baraja</a>
    </div>
  </div>

  <!-- justify-content-center d-flex -->
  <div id="cartas" class="row pt-4 pb-4 row-cols-xs-2 row-cols-md-4">
    <div class="col">
      <!-- <img src="assets/img/tipo-cartas.png" alt="" height="400px" class="img-fluid"> -->
      <img src="img/carta-atacar1.jpeg" alt="" class="mt-3 mb-3 rounded-3 img-fluid">
    </div>
    <div class="col">
      <!-- <img src="assets/img/tipo-cartas.png" alt="" height="400px" class="img-fluid"> -->
      <img src="img/carta-atacar1.jpeg" alt="" class="mt-3 mb-3 rounded img-fluid">
    </div>
    <div class="col">
      <!-- <img src="assets/img/tipo-cartas.png" alt="" height="400px" class="img-fluid"> -->
      <img src="img/carta-atacar1.jpeg" alt="" class="mt-3 mb-3 rounded img-fluid">
    </div>
    <div class="col">
      <!-- <img src="assets/img/tipo-cartas.png" alt="" height="400px" class="img-fluid"> -->
      <img src="img/carta-atacar1.jpeg" alt="" class="mt-3 mb-3 rounded img-fluid">
    </div>
    <div class="col">
      <!-- <img src="assets/img/tipo-cartas.png" alt="" height="400px" class="img-fluid"> -->
      <img src="img/carta-atacar1.jpeg" alt="" class="mt-3 mb-3 rounded img-fluid">
    </div>
    <div class="col">
      <!-- <img src="assets/img/tipo-cartas.png" alt="" height="400px" class="img-fluid"> -->
      <img src="img/carta-atacar1.jpeg" alt="" class="mt-3 mb-3 rounded img-fluid">
    </div>
  </div>

  <nav aria-label="Page navigation example">
    <ul class="pagination justify-content-end">
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
        </a>
      </li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
        </a>
      </li>
    </ul>
  </nav>

</div>

@endsection