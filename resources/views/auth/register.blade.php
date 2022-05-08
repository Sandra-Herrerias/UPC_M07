@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                 class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->

<!-- <div class="row m-0 vh-100">
    <div class="col p-0 text-center d-flex justify-content-center align-items-center login">
        <div class="text-white">
            <h1 class="display-1">Ya tienes<br> una cuenta
            </h1>
            <p>Lorem Ipsum is simply dummy industry. </p>
            <button type="button" class="btn btn-dark">
                <a href="{{ route('login') }}" class="text-white text-decoration-none">¡Inicia sesión ahora!</a>
            </button>
        </div>
    </div>
    <div class="col p-0 bg-light d-flex justify-content-center align-items-center flex-column w-100">
        <form class="w-75" method="POST" action="{{ route('register') }}">
        @csrf
            <p class="align-self-start">Hola kitten!</p>
            <h1 class="align-self-start">Crear una cuenta
            </h1>
            <br>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nombre
                </label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nickname
                </label>
                <input id="nickname" type="text" class="form-control @error('nickname') is-invalid @enderror" name="nickname" value="{{ old('nickname') }}" required autocomplete="name" autofocus>
                @error('nickname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email
                </label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Contraseña
                </label>
                <input id="password" type="password"
                                 class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="password">
                                 @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>
            
            <br>
                <button type="submit" class="btn btn-danger mt-2">
                                    {{ __('Registrarse') }}
                                </button>
        </form>
    </div>
</div> -->


<div class="row vh-100">
    <div class="col d-none d-md-flex login">
        <div class="text-center align-self-center mx-auto text-white">
            <h1 class="display-1">¿Ya tienes<br> una cuenta?
            </h1>
            <a href="{{ route('login') }}" class="text-white text-decoration-none"> <button type="button" class="btn btn-dark">
                    ¡Inicia sesión ahora! </button></a>
        </div>
    </div>
    <div class="col bg-light d-flex flex-column justify-content-center align-items-center">
        <form class="w-75" method="POST" action="{{ route('register') }}">
            @csrf
            <p class="align-self-start">Hola kitten!</p>
            <h1 class="align-self-start">Crear una cuenta
            </h1>
            <br>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nombre
                </label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nickname
                </label>
                <input id="nickname" type="text" class="form-control @error('nickname') is-invalid @enderror" name="nickname" value="{{ old('nickname') }}" required autocomplete="name" autofocus>
                @error('nickname')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email
                </label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Contraseña
                </label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <br>
            <button type="submit" class="btn btn-danger mt-2">
                {{ __('Registrarse') }}
            </button>

        </form>
    </div>
</div>



@endsection