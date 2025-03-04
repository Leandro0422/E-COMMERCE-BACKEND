@extends('layout.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg border-0 rounded">
                    <img src="https://via.placeholder.com/400" class="card-img-top" alt="Producto Ejemplo">
                    <div class="card-body text-center">
                        <h4 class="card-title">Producto Ejemplo</h4>
                        <p class="card-text text-muted">Descripción del producto de ejemplo. Es un artículo de alta calidad.</p>
                        <h5 class="text-primary fw-bold">$99.99</h5>
                        <a href="#" class="btn btn-dark">Volver</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection