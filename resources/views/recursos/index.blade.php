<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('styles/categorias/index.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Recursos de {{ $categoria->nombre }}</title>
</head>
<header>
    <nav id="barra" class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="/">eLibroPlanet</a>
        <a class="navbar-brand" href="/login">Iniciar sesión</a>
        <a class="navbar-brand" href="/categorias">Categorías</a>
    </nav>
</header>
<body>
    
    <div class="row">
        @foreach($categoria->recursos as $recurso)
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset($recurso->imagen) }}" class="card-img-top" alt="Imagen de recurso">
                    <div class="card-body">
                        <h5 class="card-title">{{ $recurso->nombre }}</h5>
                        <p class="card-text">{{ $recurso->descripcion }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</body>
<footer>
    <a class="btn" id="btn1" href="/about">Acerca de nosotros</a>
</footer>
</html>
