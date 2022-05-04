@extends('layouts.app')
@section('content')
<div id="titulo" class="container-flex p-3" style="background-color: #F28627;">
    <div class="row">
      <div class="col">
        <h1 id="titulo-aboutus" class="text-center text-dark display-1">Tecnologias</h1>
      </div>
    </div>   
  </div>
  
  <div id="como_jugar" class="container pt-5">
      <h1 class="text-center text-white display-2">JUEGO</h1>
  </div>
  
  <div class="wrapper">
      <div class="center-line">
        <a href="/technologies#" class="scroll-icon"><i><img src="img/arrow-up.svg" alt=""></i></a>
      </div>
      <div class="row row-1">
        <section>
            <img class="icon" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/c/c-original.svg" />
          <div class="details">
            <span class="title">C</span>
            <span>1st Jan 2021</span>
          </div>
          <p>Lorem ipsum dolor sit ameters consectetur adipisicing elit. Sed qui veroes praesentium maiores, sint eos vero sapiente voluptas debitis dicta dolore.</p>
        </section>
      </div>
      <div class="row row-2">
        <section>
            <img class="icon" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/csharp/csharp-original.svg" />
          <div class="details">
            <span class="title">C#</span>
            <span>2nd Jan 2021</span>
          </div>
          <p>Lorem ipsum dolor sit ameters consectetur adipisicing elit. Sed qui veroes praesentium maiores, sint eos vero sapiente voluptas debitis dicta dolore.</p>
        </section>
      </div>
      <div class="row row-1">
        <section>
            <img class="icon" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original-wordmark.svg" />
          <div class="details">
            <span class="title">MySQL</span>
            <span>3rd Jan 2021</span>
          </div>
          <p>Lorem ipsum dolor sit ameters consectetur adipisicing elit. Sed qui veroes praesentium maiores, sint eos vero sapiente voluptas debitis dicta dolore.</p>
        </section>
      </div>
    </div>
  
    <div id="como_jugar" class="container p-5">
      <h1 class="text-center text-white display-2">WEB</h1>
  </div>
  
    <div class="wrapper">
        <div class="center-line">
            <a href="/technologies#" class="scroll-icon"><i><img src="img/arrow-up.svg" alt=""></i></a>
        </div>
        <div class="row row-1">
          <section>
            <img class="icon" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-plain.svg" />
            <div class="details">
              <span class="title">Laravel</span>
              <span>1st Jan 2021</span>
            </div>
            <p>Lorem ipsum dolor sit ameters consectetur adipisicing elit. Sed qui veroes praesentium maiores, sint eos vero sapiente voluptas debitis dicta dolore.</p>
          </section>
        </div>
        <div class="row row-2">
          <section>
            <img class="icon" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/angularjs/angularjs-original.svg" />
            <div class="details">
              <span class="title">Angular</span>
              <span>2nd Jan 2021</span>
            </div>
            <p>Lorem ipsum dolor sit ameters consectetur adipisicing elit. Sed qui veroes praesentium maiores, sint eos vero sapiente voluptas debitis dicta dolore.</p>
          </section>
        </div>
        <div class="row row-1">
          <section>
            <img class="icon" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bootstrap/bootstrap-original.svg" />
            <div class="details">
              <span class="title">Bootstrap</span>
              <span>3rd Jan 2021</span>
            </div>
            <p>Lorem ipsum dolor sit ameters consectetur adipisicing elit. Sed qui veroes praesentium maiores, sint eos vero sapiente voluptas debitis dicta dolore.</p>
          </section>
        </div>
        <div class="row row-2">
          <section>
            <img class="icon" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original-wordmark.svg" />
            <div class="details">
              <span class="title">MySQL</span>
              <span>4th Jan 2021</span>
            </div>
            <p>Lorem ipsum dolor sit ameters consectetur adipisicing elit. Sed qui veroes praesentium maiores, sint eos vero sapiente voluptas debitis dicta dolore.</p>
          </section>
        </div>
      </div>
      @endsection