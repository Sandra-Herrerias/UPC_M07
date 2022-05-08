@extends('layouts.app')

@section('content')
<div class="row vh-100">
    <div class="col bg-light d-flex flex-column justify-content-center align-items-center">
        <form method="POST" action="{{ route('login') }}" class="w-75">
        <a href="/home"><img class="mx-auto pb-5" src="../img/nav-logo.png" width="270"></a>
            <p class="align-self-start">¡Bienvenido de nuevo!
            @csrf
            <h1 class="align-self-start">Ingrese a su cuenta
            </h1>
            <br>
            <div class="mb-3">
                <label class="form-label">Correo electrónico
                </label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Contraseña</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>


            <button type="submit" class="btn btn-danger mt-3">
                {{ __('Iniciar sesion') }}
            </button>
        </form>
    </div>
    <div class="col d-none d-md-flex login">
        <div class="text-center align-self-center mx-auto text-white">
            <h1 class="display-1">Todavía no tienes<br> cuenta? </h1>
            <button type="button" class="btn btn-dark"><a href="/register" class="text-white text-decoration-none">¡Regístrate ahora!</a> </button>
        </div>
    </div>
</div>
@endsection