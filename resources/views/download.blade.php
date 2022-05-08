@extends('layouts.app')
@section('content')
<div class="bg-danger">
    <div class="container text-white">
        <div class="row">
            <div class="col-md-6 col-lg-5 ml-auto d-flex align-items-center mt-4 mt-md-0">
                <div>
                    <h1>¡Disponible ya en PC!</h1>
                    <br>
                    <a href="https://github.com/marioRelajao/ProyectoGrupo6/releases/tag/v1" target="_blank">
                        <img src="img/windows.png" height="60"></a>
                    <br>
                    <p class="margin-top-s text-muted mt-2">*Revisa los requisitios antes de descargar.</p>
                </div>
            </div>
            <div class="col-md-6 d-flex align-items-center justify-content-center animation">
                <img  src="img/cat-download.png" class="img-fluid cat">
            </div>
        </div>
    </div>
</div>

<div class="container text-white mt-5 fs-5">
    <h2>Requisitos del sistema</h2>

    <p class=""><i class="bi bi-windows"></i> Windows</p>

    <dl class="row">
        <div class="col">
            <div class="row">
                <dt class="col-sm-3">Sistema Operativo</dt>
                <dd class="col-sm-9">Windows® 10 64-bit.</dd>

                <dt class="col-sm-3">Procesador</dt>
                <dd class="col-sm-9">
                    Intel® Core™ i3-4340 or AMD FX-6300
                </dd>

                <dt class="col-sm-3">Tarjeta de vídeo</dt>
                <dd class="col-sm-9">
                    <p>NVIDIA® GeForce® GTX 670 / NVIDIA® GeForce® GTX 1650</p>
                    <p>AMD Radeon™ HD 7950 - DirectX 12.0 compatible</p>
                </dd>
            </div>

        </div>
        <div class="col">
            <div class="row">
                <dt class="col-sm-3">Ram</dt>
                <dd class="col-sm-9">8 GB RAM</dd>

                <dt class="col-sm-3">Almacenamiento</dt>
                <dd class="col-sm-9">
                    20 GB de espacio disponibles en disco
                </dd>
                <dt class="col-sm-3">Internet</dt>
                <dd class="col-sm-9">Conexión de Internet de banda ancha
                </dd>
            </div>

        </div>
    </dl>

    <h2>Detalles del producto</h2>

    <dl class="row">
        <div class="col">
            <div class="row">
                <dt class="col-sm-3">Genéro</dt>
                <dd class="col-sm-9">Juego de cartas</dd>
                <dt class="col-sm-3">Plataforma</dt>
                <dd class="col-sm-9">
                    Windows
                </dd>
            </div>

        </div>
        <div class="col">
            <div class="row">
                <dt class="col-sm-3">Lenguajes disponibles</dt>
                <dd class="col-sm-9">
                    <p>English (US)</p>
                    <p>Português (BR)</p>
                    <p>English (EU)</p>
                    <p> Deutsch</p>
                    <p> Español (EU)</p>
                </dd>
            </div>
        </div>
        <div class="col">
            <div class="row">
                <dt class="col-sm-3">Requisitos del produto</dt>
                <dd class="col-sm-9">
                    <p>Conexión a internet.</p>
                    <p>Para jugar debes estar registrado, clica <a class="text-warning" href="{{ route('register') }}">aquí</a> para registrarte.</p>
                </dd>
            </div>
        </div>
    </dl>
</div>
@endsection