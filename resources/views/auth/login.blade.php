@extends('layouts.app')

<style>
    .card {
        border-radius: 15px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        width: 300px;
        align-items: center;
        justify-content: center;
        background-color: rgba(255, 255, 255, 0.9); /* Fondo semi-transparente */
        backdrop-filter: blur(10px); /* Efecto de desenfoque */
        margin: 0 auto;
    }

    .card:hover {
        background: linear-gradient(0deg,transparent,skyblue);
        animation: animate 6s linear infinite;
        animation-delay: -3s;
        margin-top: 60px;
    }

    .form-check {
        font-weight: bold;
    }

    .btn {
        background-color: #007bff;
        border-color: #007bff;
    }

    .btn:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }

    body {
        display-outside: ruby;
        background-image: url('https://img.freepik.com/foto-gratis/muchos-camiones-transporte-estacionados-estacion-servicio-al-atardecer-ai-generativo_123827-23416.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 100vh; /* Para que el fondo ocupe toda la altura de la pantalla */
        align-items: center;
        justify-content: center;
        display: flow;
    }

</style>



@section('content')
    <!-- Comienza la sección de contenido -->
    <div class="container">
        <!-- Contenedor principal -->
        <div class="row justify-content-center">
            <!-- Fila centrada horizontalmente -->
            <div class="col-md-8">
                <!-- Columna que ocupa 8 de 12 columnas en dispositivos medianos o más grandes -->
                <div class="card">
                    <!-- Tarjeta de inicio de sesión -->
                    <div class="card-header">{{ __('Login') }}</div>
                    <!-- Encabezado de la tarjeta -->
                    <div class="card-body">
                        <!-- Cuerpo de la tarjeta -->
                        <div id="loading-container">
                            <!-- Contenedor de carga (se muestra mientras se procesa la solicitud) -->
                            <div class="loading"></div>
                        </div>
                        <div id="form-container">
                            <!-- Contenedor del formulario -->
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <!-- Token CSRF -->
                                <div class="row mb-3">
                                    <!-- Fila de espacio -->
                                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                                    <!-- Etiqueta del campo de correo electrónico -->
                                    <div class="col-md-6">
                                        <!-- Columna de espacio -->
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        <!-- Campo de correo electrónico -->
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        <!-- Mensaje de error en caso de correo electrónico inválido -->
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <!-- Segunda fila de espacio -->
                                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                                    <!-- Etiqueta del campo de contraseña -->
                                    <div class="col-md-6">
                                        <!-- Segunda columna de espacio -->
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                        <!-- Campo de contraseña -->
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        <!-- Mensaje de error en caso de contraseña inválida -->
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <!-- Tercera fila de espacio -->
                                    <div class="col-md-6 offset-md-4">
                                        <!-- Columna desplazada -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <!-- Casilla de verificación de "Recordarme" -->
                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                            <!-- Etiqueta para "Recordarme" -->
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <!-- Cuarta fila de espacio -->
                                    <div class="col-md-8 offset-md-4">
                                        <!-- Última columna -->
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Login') }}
                                        </button>
                                        <!-- Botón de inicio de sesión -->
                                        @if (Route::has('password.request'))
                                            <!-- Condición para mostrar el enlace de restablecimiento de contraseña -->
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                            <!-- Enlace para restablecer la contraseña -->
                                        @endif
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<!-- Fin de la sección de contenido -->

