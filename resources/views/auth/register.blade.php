@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow" style="border: none; border-radius: 10px; overflow: hidden; border-top: 4px solid #FDC300;">
                <div class="card-header py-3" style="background-color: #002856; color: white; font-weight: 600; font-size: 1.25rem; text-align: center;">
                    <i class="fas fa-user-plus mr-2"></i> {{ __('Registro de Usuario') }}
                </div>

                <div class="card-body px-4 px-md-5 py-4">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row mb-4">
                            <label for="name" class="col-md-4 col-form-label text-md-end" style="color: #002856; font-weight: 500;">
                                <i class="fas fa-user mr-2"></i>{{ __('Nombre Completo') }}
                            </label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" 
                                       name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                                       style="border-color: #002856; padding: 10px;">
                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="email" class="col-md-4 col-form-label text-md-end" style="color: #002856; font-weight: 500;">
                                <i class="fas fa-envelope mr-2"></i>{{ __('Correo Electrónico') }}
                            </label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" 
                                       name="email" value="{{ old('email') }}" required autocomplete="email"
                                       style="border-color: #002856; padding: 10px;">
                                @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="password" class="col-md-4 col-form-label text-md-end" style="color: #002856; font-weight: 500;">
                                <i class="fas fa-lock mr-2"></i>{{ __('Contraseña') }}
                            </label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" 
                                       name="password" required autocomplete="new-password"
                                       style="border-color: #002856; padding: 10px;">
                                @error('password')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                                <small class="form-text text-muted">Mínimo 8 caracteres</small>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end" style="color: #002856; font-weight: 500;">
                                <i class="fas fa-lock mr-2"></i>{{ __('Confirmar Contraseña') }}
                            </label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" 
                                       name="password_confirmation" required autocomplete="new-password"
                                       style="border-color: #002856; padding: 10px;">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary px-4 py-2" 
                                        style="background-color: #002856; border: none; border-radius: 5px; font-weight: 500; transition: all 0.3s;"
                                        onmouseover="this.style.backgroundColor='#FDC300'; this.style.color='#002856';" 
                                        onmouseout="this.style.backgroundColor='#002856'; this.style.color='white';">
                                    <i class="fas fa-user-check mr-2"></i> {{ __('Registrarse') }}
                                </button>
                            </div>
                        </div>

                        <div class="form-group row mt-4">
                            <div class="col-md-8 offset-md-4">
                                <p style="color: #002856; font-size: 0.9rem;">
                                    ¿Ya tienes una cuenta? 
                                    <a href="{{ route('login') }}" style="color: #FDC300; font-weight: 500;">Inicia sesión aquí</a>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<style>
    .card {
        transition: transform 0.3s ease;
    }
    .card:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }
    .form-control:focus {
        border-color: #FDC300;
        box-shadow: 0 0 0 0.2rem rgba(253, 195, 0, 0.25);
    }
    a {
        transition: color 0.3s ease;
    }
    a:hover {
        text-decoration: none;
    }
</style>