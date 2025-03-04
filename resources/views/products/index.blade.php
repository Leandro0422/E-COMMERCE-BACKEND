@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card p-3 mb-3">
                    <img src="https://via.placeholder.com/300" class="card-img-top" alt="Producto 1">
                    <div class="card-body text-center">
                        <h3>Cuaderno UNAB</h3>
                        <p>Cuaderno institucional de la UNAB con diseño exclusivo.</p>
                        <h5 class="text-primary fw-bold">$25.000</h5>
                        <a href="#" class="btn btn-dark">Ver Más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3 mb-3">
                    <img src="https://via.placeholder.com/300" class="card-img-top" alt="Producto 2">
                    <div class="card-body text-center">
                        <h3>Termo UNAB</h3>
                        <p>Termo oficial de la UNAB, ideal para bebidas frías y calientes.</p>
                        <h5 class="text-primary fw-bold">$40.000</h5>
                        <a href="#" class="btn btn-dark">Ver Más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3 mb-3">
                    <img src="https://via.placeholder.com/300" class="card-img-top" alt="Producto 3">
                    <div class="card-body text-center">
                        <h3>Camisa UNAB</h3>
                        <p>Camisa oficial de la UNAB con logo bordado.</p>
                        <h5 class="text-primary fw-bold">$55.000</h5>
                        <a href="#" class="btn btn-dark">Ver Más</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection