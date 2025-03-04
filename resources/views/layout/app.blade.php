<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
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
    </style>
</head>
<body>

    @include('layout.navbar')

    
    @yield('content')

    @include('layout.footer')
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
