<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('styles/recursos/index.css') }}">
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
    <a class="btn" id="btn_crear" href="{{ route('recursos.crear') }}">Crear</a>
    <div class="row">
        @foreach($categoria->recursos as $recurso)
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset($recurso->imagen) }}" class="card-img-top" alt="Imagen de recurso">
                    <div class="card-body">
                        <h5 class="card-title">{{ $recurso->titulo }}</h5>
                        <p class="card-text">{{ $recurso->descripcion }}</p>
                        <a href="{{ route('recursos.editar', $recurso) }}" class="btn btn-primary">Editar</a>

                        <form action="{{ route('recursos.eliminar', $recurso) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="msg()">Eliminar</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <script>
        function msg() {
            return confirm('¿Estás seguro de que deseas eliminar esta categoría?');
        }
    </script>
</body>

<footer>
    <a class="btn" id="btn1" href="/about">Acerca de nosotros</a>
</footer>
</html>
