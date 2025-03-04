@extends('layout.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg border-0 rounded p-4">
                    <h3 class="text-center mb-4">Crear Nuevo Producto</h3>
                    <form>
                        <div class="mb-3">
                            <label for="nombreProducto" class="form-label">Nombre del Producto</label>
                            <input type="text" class="form-control" id="nombreProducto" placeholder="Ingrese el nombre">
                        </div>
                        <div class="mb-3">
                            <label for="descripcionProducto" class="form-label">Descripción</label>
                            <textarea class="form-control" id="descripcionProducto" rows="3" placeholder="Ingrese una descripción"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="precioProducto" class="form-label">Precio</label>
                            <input type="number" class="form-control" id="precioProducto" placeholder="Ingrese el precio">
                        </div>
                        <div class="mb-3">
                            <label for="imagenProducto" class="form-label">Imagen del Producto</label>
                            <input type="file" class="form-control" id="imagenProducto">
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Crear Producto</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <footer class="footer mt-5">
        <p>&copy; 2025 Universidad Autónoma de Bucaramanga - UNAB</p>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

@endsection
