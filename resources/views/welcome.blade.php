@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row no-gutter">
        <!-- The image half -->
        <div class="col-md-6 d-none d-md-flex bg-image" style="min-height: 100vh;"></div>


        <!-- The content half -->
        <div class="col-md-6 bg-light">
            <div class="login d-flex align-items-center py-5">

                <!-- Demo content-->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 col-xl-7 mx-auto">
                            <h3 class="display-4 text-center">Bienvenido</h3>
                            <p class="text-muted text-center mb-4">Inicia sesion para poder comenzar a administrar tu negocio</p>


                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group mb-3">
                                    <input id="email" type="email" placeholder="Correo" class="form-control rounded-pill border-0 shadow-sm px-4 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>

                                <div class="form-group mb-3">
                                    <input id="password" type="password" placeholder="Contraseña" class="form-control rounded-pill border-0 shadow-sm px-4 text-primary @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>

                                <div class="custom-control custom-checkbox mb-3">
                                    <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="custom-control-label" for="remember">
                                        {{ __('Recordar Contraseña') }}
                                    </label>

                                </div>

                                 {{-- boton iniciar sesion --}}
                                <button type="submit" class="btn btn-primary btn-block text-uppercase mb-2 rounded-pill shadow-sm">
                                    {{ __('Login') }}
                                </button>

                                {{-- boton registrarse --}}
                                <div class="text-center">
                                    <a class="btn btn-dark btn-block text-uppercase mb-2 rounded-pill shadow-sm" href="{{ route('register') }}">Crear una Cuenta!</a>
                                </div>

                                <a class="btn btn-secondary btn-block text-uppercase mb-2 rounded-pill shadow-sm" href="{{ route('principal') }}">Panel Administracion</a>

                                <a class="btn btn-success btn-block text-uppercase mb-2 rounded-pill shadow-sm" href="#">Productos</a>


                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif

                            </form>
                        </div>
                    </div>
                </div><!-- End -->

            </div>
        </div><!-- End -->

    </div>
</div>

@endsection
