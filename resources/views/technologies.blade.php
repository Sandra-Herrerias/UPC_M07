@extends('layouts.app')
@section('content')
<div id="titulo" class="container-flex p-5" style="background-color: #F28627;">
  <h1 class="text-center text-dark display-1">Tecnologias</h1>
</div>
<div id="juego" class="container pt-5">
  <h2 class="text-center text-white display-4">JUEGO</h2>
</div>

<div class="wrapper">
  <div class="center-line">
    <a class="scroll-icon"><i><img src="assets/img/arrow-up.svg" alt=""></i></a>
  </div>
  <div class="row row-1">
    <section>
      <img class="icon" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/c/c-original.svg" />
      <div class="details">
        <span class="title">C</span>
      </div>
      <p>Es un lenguaje de programación de propósito general. Sirve para desarrollar tanto aplicaciones como sistemas
        operativos. Además, forma la base de otros lenguajes más actuales como Java, C++ o C#.</p>
    </section>
  </div>
  <div class="row row-2">
    <section>
      <img class="icon" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/csharp/csharp-original.svg" />
      <div class="details">
        <span class="title">C#</span>
      </div>
      <p>Es un lenguaje de programación orientado a objetos. Su sintaxis básica deriva de C/C++ y utiliza el modelo de
        objetos de la plataforma .NET, similar al de Java, aunque incluye mejoras derivadas de otros lenguajes.</p>
    </section>
  </div>
  <div class="row row-1">
    <section>
      <img class="icon" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original-wordmark.svg" />
      <div class="details">
        <span class="title">MySQL</span>
      </div>
      <p>Es un sistema de gestión de bases de datos relacionales de código abierto con un modelo cliente-servidor. <br>
        El funcionamiento es el siguiente: MySQL crea una base de datos para almacenar y manipular datos, definiendo la
        relación de cada tabla. Por otro lado, los clientes puedes realizar solicitudes escribiendo instrucciones SQL
        especificadas en MySQL.
      </p>
    </section>
  </div>
  <div class="row row-2">
    <section>
      <img class="icon" src="http://2.bp.blogspot.com/-Hx6dwtBYaI8/Vp7dPlpVQOI/AAAAAAAAClg/Gg8aMV0eeYw/s1600/09%2BSockets%2By%2Bpuertos.png" />
      <div class="details">
        <span class="title">Sockets</span>
      </div>
      <p>La aplicación usa un socket por usuario. Cuando el usuario se conecta al servidor, este guarda el socket en una
        lista. De esta manera puede atender a todos los clientes a través del socket que corresponda.
      </p>
    </section>
  </div>
  <div class="row row-1">
    <section>
      <img class="icon" src="https://slideplayer.es/slide/92033/1/images/2/CONCURRENCIA.jpg" />
      <div class="details">
        <span class="title">Concurrencia y exclusión mutua</span>
      </div>
      <p>Usamos concurrencia para que todos los usuarios puedan usar el servidor a la vez sin tener que esperar a que un
        cliente deje de usar el servidor. Lo logramos mediante uso de threads, que cada cierto tiempo procesan la
        información de un usuario o de otro. <br>Por este mismo motivo es necesaria también la exclusión mutua, para
        asegurarnos de que no salte cuando se está haciendo algún cambio ya sea en la base de datos, o en alguna lista
        que use el servidor.
      </p>
    </section>
  </div>
</div>

<div id="web" class="container p-5">
  <h1 class="text-center text-white display-2">WEB</h1>
</div>

<div class="wrapper">
  <div class="center-line">
    <a class="scroll-icon"><i><img src="assets/img/arrow-up.svg" alt=""></i></a>
  </div>
  <div class="row row-1">
    <section>
      <img class="icon" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-plain.svg" />
      <div class="details">
        <span class="title">Laravel</span>
      </div>
      <p>Laravel es un framework de código abierto para desarrollar aplicaciones y
        servicios web con PHP 5, PHP 7 y PHP 8. Su filosofía es desarrollar código PHP de
        forma elegante y simple, evitando el "código espagueti". Fue creado en 2011 y tiene
        una gran influencia de frameworks como Ruby on Rails, Sinatra y ASP.NET MVC.</p>
    </section>
  </div>
  <div class="row row-2">
    <section>
      <img class="icon" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/angularjs/angularjs-original.svg" />
      <div class="details">
        <span class="title">Angular</span>
      </div>
      <p>Angular es un framework para aplicaciones web desarrollado en TypeScript, de código abierto, mantenido por Google, que se utiliza para crear y mantener aplicaciones web de una sola página. Su objetivo es aumentar las aplicaciones basadas en navegador con capacidad de Modelo Vista Controlador (MVC), en un esfuerzo para hacer que el desarrollo y las pruebas sean más fáciles.</p>
    </section>
  </div>
  <div class="row row-1">
    <section>
      <img class="icon" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bootstrap/bootstrap-original.svg" />
      <div class="details">
        <span class="title">Bootstrap</span>
      </div>
      <p>Bootstrap es una biblioteca multiplataforma o conjunto de herramientas de código abierto para diseño de sitios y aplicaciones web. Contiene plantillas de diseño con tipografía, formularios, botones, cuadros, menús de navegación y otros elementos de diseño basado en HTML y CSS, así como extensiones de JavaScript adicionales. A diferencia de muchos frameworks web, solo se ocupa del desarrollo front-end.</p>
    </section>
  </div>
  <div class="row row-2">
    <section>
      <img class="icon" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original-wordmark.svg" />
      <div class="details">
        <span class="title">MySQL</span>
      </div>
      <p>MySQL es un Sistema Gestor de Bases de Datos (SGBD o DBMS en Inglés). Se trata
        de una aplicación o un conjunto de aplicaciones que permite crear y manipular
        bases de datos relacionales. MySQL se desarrolló a mediados de los 90 y fue uno
        de las primeros gestores de bases de datos de código abierto disponibles en el
        mercado.</p>
    </section>
  </div>
</div>
@endsection