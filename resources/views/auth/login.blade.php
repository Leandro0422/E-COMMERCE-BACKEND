@extends('layouts.app')

@section('content')
<!-- Navbar Amarillo -->
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #FDC300; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
    <div class="container">
        <a class="navbar-brand" href="#" style="font-weight: 700; color: #002856;">
            <img src="{{ asset('images/unab-logo.png') }}" alt="UNAB Logo" style="height: 40px; margin-right: 10px;">
            Universidad Autónoma de Bucaramanga
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon" style="color: #002856;"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: #002856; font-weight: 500;">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: #002856;">Acerca de</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: #002856;">Contacto</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Contenido Principal -->
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow" style="border: none; border-radius: 10px; overflow: hidden; border-top: 4px solid #FDC300;">
                <div class="card-header py-3" style="background-color: #002856; color: white; font-weight: 600; font-size: 1.25rem; text-align: center;">
                    <i class="fas fa-user-graduate mr-2"></i> Acceso al Sistema
                </div>

                <div class="card-body px-4 px-md-5 py-4">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row mb-4">
                            <label for="email" class="col-md-4 col-form-label text-md-end" style="color: #002856; font-weight: 500;">
                                Correo Institucional
                            </label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" 
                                       name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                       style="border-color: #002856; padding: 10px;">
                                @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="password" class="col-md-4 col-form-label text-md-end" style="color: #002856; font-weight: 500;">
                                Contraseña
                            </label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" 
                                       name="password" required autocomplete="current-password"
                                       style="border-color: #002856; padding: 10px;">
                                @error('password')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" 
                                           style="border-color: #002856;" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember" style="color: #002856;">
                                        Recordar mis credenciales
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary px-4 py-2" 
                                        style="background-color: #002856; border: none; border-radius: 5px; font-weight: 500;">
                                    <i class="fas fa-sign-in-alt mr-2"></i> Ingresar
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link ml-3" href="{{ route('password.request') }}" 
                                       style="color: #002856; text-decoration: none;">
                                        ¿Olvidó su contraseña?
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="footer py-4" style="background-color: #002856; color: white; margin-top: 50px;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
                <img src="{{ asset('images/unab-logo-white.png') }}" alt="UNAB Logo" style="height: 40px;">
                <p class="mt-2 mb-0" style="font-size: 0.9rem;">Educación de calidad para el futuro</p>
            </div>
            <div class="col-md-6 text-center text-md-right">
                <p style="font-size: 0.9rem; margin-bottom: 0;">
                    <i class="fas fa-map-marker-alt mr-2"></i> Bucaramanga, Santander, Colombia
                </p>
                <p style="font-size: 0.9rem; margin-bottom: 0;">
                    &copy; {{ date('Y') }} Universidad Autónoma de Bucaramanga
                </p>
            </div>
        </div>
    </div>
</footer>
@endsection

<!-- Estilos adicionales -->
<style>
    .navbar {
        padding: 10px 0;
    }
    .navbar-brand {
        display: flex;
        align-items: center;
    }
    .nav-link {
        padding: 8px 15px;
        border-radius: 4px;
        transition: background-color 0.3s ease;
    }
    .nav-link:hover {
        background-color: rgba(0, 40, 86, 0.1);
    }
    .card {
        transition: transform 0.3s ease;
    }
    .card:hover {
        transform: translateY(-3px);
    }
    .btn-primary:hover {
        opacity: 0.9;
    }
    .footer a {
        color: #FDC300;
        transition: color 0.3s ease;
    }
    .footer a:hover {
        color: white;
        text-decoration: none;
    }
</style>