@extends('layouts.app')
@section('content')
<div id="titulo" class="container-flex p-5" style="background-color: #F28627;">
  <div class="row">
    <div class="col">
      <h1 id="titulo-aboutus" class="text-center text-dark display-1">SOBRE NOSOTROS</h1>
    </div>
  </div>
</div>

<div id="como_jugar" class="container text-white p-5">
  <h2 class="text-center  display-4">CONOCE A LOS DESAROLLADORES DEL JUEGO</h2>
  <p class="text-center fs-5">Somos un grupo de alumnos de segundo de Ingeniería en Sistemas de Telecomunicaciones y Telemática
    en la Universidad Politécnica de Cataluña. Para aprender sobre sistemas operativos y el uso de
    servidores, hemos creado este juego el cual requiere conexión con el servidor de la UPC.</p>
</div>

<div class="container">
  <div class="row row-cols-2 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4  justify-content-center">
    <div class="col">
      <div class="carta-box">
        <div class="carta">
          <div class="cara">
            <img src="img/carta-posterior.jpeg" width="256" height="576">
          </div>
          <div class="cara detras">
            <div class="card h-100">
              <img src="img/fotoAna.jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Ana Gozálvez</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam egestas lectus
                  quis nunc fringilla, a bibendum quam ornare. Proin efficitur justo vitae elit feugiat, quis
                  aliquam purus tincidunt.</p>
                <a href="https://github.com/InesMasllorens" target="_blank" class="bi bi-github"></a>
                <a href="https://www.instagram.com/ines_masllorens/" target="_blank" class="bi bi-instagram"></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="carta-box">
        <div class="carta">
          <div class="cara">
            <img src="img/carta-posterior.jpeg" width="256" height="576">
          </div>
          <div class="cara detras">
            <div class="card h-100">
              <img src="img/Ines.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Ines Masllorens</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam egestas lectus
                  quis nunc fringilla, a bibendum quam ornare. Proin efficitur justo vitae elit feugiat, quis
                  aliquam purus tincidunt.</p>
                <a href="https://github.com/InesMasllorens" target="_blank" class="bi bi-github"></a>
                <a href="https://www.instagram.com/ines_masllorens/" target="_blank" class="bi bi-instagram"></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="carta-box">
        <div class="carta">
          <div class="cara">
            <img src="img/carta-posterior.jpeg" width="256" height="576">
          </div>
          <div class="cara detras">
            <div class="card h-100">
              <img src="img/fotoLidia.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Lidia Chicano</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam egestas lectus
                  quis nunc fringilla</p>
                <a href="https://github.com/lidiachicano" target="_blank" class="bi bi-github"></a>
                <a href="https://www.instagram.com/ines_masllorens/" target="_blank" class="bi bi-instagram"></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="carta-box">
        <div class="carta">
          <div class="cara">
            <img src="img/carta-posterior.jpeg" width="256" height="576">
          </div>
          <div class="cara detras">
            <div class="card">
              <img src="img/fotoMario.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Mario Cerdà</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam egestas lectus
                  quis nunc fringilla, a bibendum quam ornare. Proin efficitur justo vitae elit feugiat, quis
                  aliquam purus tincidunt.</p>
                <a href="https://github.com/marioRelajao" target="_blank" class="bi bi-github"></a>
                <a href="https://www.instagram.com/ines_masllorens/" target="_blank" class="bi bi-instagram"></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="como_jugar" class="container p-5 text-white">
  <h2 class="text-center  display-4">CONOCE A LOS DESAROLLADORES DEL JUEGO</h2>
  <p class="fs-5">Somos un grupo de alumnos de segundo de <strong>Grado Superior en Desarrollo de Aplicaciones
      Web</strong>
    en el Instituto Provençana.
    En este proyecto hemos desarrollado la página web del juego Exploding Kittens desarrollado por los miembros de la
    UPC.</p>
</div>

<div class="container">
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4  mb-5">
    <div class="col">
      <div class="carta-box">
        <div class="carta">
          <div class="cara">
            <img src="img/carta-posterior.jpeg" width="256" height="576">
          </div>
          <div class="cara detras">
            <div class="card">
              <img src="img/fotoAlex.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Alexander Millones</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam egestas lectus
                  quis nunc fringilla, a bibendum quam ornare. Proin efficitur justo vitae elit feugiat, quis
                  aliquam purus tincidunt.</p>
                <a href="https://github.com/AlexMillonesRojas" target="_blank" class="bi bi-github"></a>
                <a href="https://www.instagram.com/ines_masllorens/" target="_blank" class="bi bi-instagram"></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="carta-box">
        <div class="carta">
          <div class="cara">
            <img src="img/carta-posterior.jpeg" width="256" height="576">
          </div>
          <div class="cara detras">
            <div class="card">
              <img src="img/jordi.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Jordi Rocha</h5>
                <p class="card-text">Me considero muy motivado, muy proactivo, con capacidad para adaptarme a diferentes
                  entornos y aprendiendo nuevas tecnologías.</p>
                <a href="https://github.com/jordirocha" target="_blank" class="bi bi-github"></a>
                <a href="https://www.instagram.com/ines_masllorens/" target="_blank" class="bi bi-instagram"></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="carta-box">
        <div class="carta">
          <div class="cara">
            <img src="img/carta-posterior.jpeg" width="256" height="576">
          </div>
          <div class="cara detras">
            <div class="card">
              <img src="img/Sandra.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Sandra Herrerias</h5>
                <p class="card-text">Estudiante DAW, INS Provençana.</p>
                <a href="https://github.com/Sandra-Herrerias" target="_blank" class="bi bi-github"></a>
                <a href="https://www.instagram.com/ines_masllorens/" target="_blank" class="bi bi-instagram"></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection