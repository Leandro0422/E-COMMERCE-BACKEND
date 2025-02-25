<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promoción UNAB</title>
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
        .carousel-container {
            max-width: 800px;
            margin: auto;
        }
        .carousel img {
            height: 400px;
            object-fit: cover;
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
        <h1>Bienvenido a la Universidad Autónoma de Bucaramanga</h1>
        <p>Explora nuestras promociones y beneficios exclusivos.</p>
    </header>
    
    <div class="carousel-container">
        <div id="carouselUnab" class="carousel slide mb-4" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://unabvirtual.unab.edu.co/images/2023/Tecnologi%CC%81a%20en%20Regencia%20de%20Farmacia.jpg" class="d-block w-100" alt="Campus UNAB">
                </div>
                <div class="carousel-item">
                    <img src="https://unab.edu.co/wp-content/uploads/2025/02/induccion-2025-3.jpg" class="d-block w-100" alt="Evento UNAB">
                </div>
                <div class="carousel-item">
                    <img src="https://portales.vanguardia.com/campus/wp-content/uploads/2023/06/PAUTA-VANGUARDIA-BANNER-1000X563.png" class="d-block w-100" alt="Biblioteca UNAB">
                </div>
                <div class="carousel-item">
                    <img src="https://unired.edu.co/images/instituciones/UNAB/2017/junio/unab.jpg" class="d-block w-100" alt="Laboratorio UNAB">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselUnab" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselUnab" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </button>
        </div>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card p-3 mb-3">
                    <h3>Becas y Descuentos</h3>
                    <p>Descubre nuestras opciones de becas y descuentos para estudiantes.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3 mb-3">
                    <h3>Programas Académicos</h3>
                    <p>Conoce nuestra oferta académica en pregrado y posgrado.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3 mb-3">
                    <h3>Eventos y Conferencias</h3>
                    <p>Participa en nuestros eventos exclusivos para la comunidad UNAB.</p>
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

