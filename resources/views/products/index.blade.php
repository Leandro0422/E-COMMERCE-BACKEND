<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos UNAB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #ffffff;
            color: #000000;
        }
        .navbar {
            background-color: #FDC300;
        }
        .card {
            background-color: #ffffff;
            color: #000000;
            border: 2px solid #FDC300;
        }
        .footer {
            background-color: #FDC300;
            color: #002856;
            padding: 20px;
            text-align: center;
        }
        .logo {
            position: absolute;
            top: 10px;
            right: 10px;
            width: 80px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">UNAB</a>
        </div>
    </nav>
    
    <header class="text-center py-5">
        <img src="https://unired.edu.co/images/instituciones/UNAB/2021/Marzo/Logo_UNAB.png" alt="Logo UNAB" class="logo">
        <h1>Productos Disponibles</h1>
        <p>Explora nuestra selección de productos exclusivos de la UNAB.</p>
    </header>
    
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
    
    <footer class="footer">
        <p>&copy; 2025 Universidad Autónoma de Bucaramanga - UNAB</p>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>