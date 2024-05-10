<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('styles/recursos/crear.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Crear Recurso</title>
</head>
<body>
    <h1>Crear Recurso</h1>

    @if ($errors->any())
        <div>
            <strong>Hubo algunos problemas con los datos ingresados:</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Autores -->
    <form id="form-autor" method="POST" action="{{ route('recursos.guardar') }}" enctype="multipart/form-data">
     @csrf
        <div>
            <label for="nombre_autor">Nombre del Autor:</label>
            <input type="text" id="nombre_autor" name="nombre_autor" value="{{ old('nombre_autor') }}">
        </div>
        <div>
            <label for="apellido_autor">Descripción:</label>
            <input type="text" id="descripcion" name="descripcion" value="{{ old('descripcion_autor') }}">
        </div>
        <div>
            <button type="submit" id="guardar-autor">Guardar Autor</button>
        </div>
    </form>

    <!-- Editoriales-->
    <form id="form-autor" method="POST" action="{{ route('recursos.guardar') }}" enctype="multipart/form-data">
     @csrf
        <div>
            <label for="nombre_autor">Nombre Editorial:</label>
            <input type="text" id="nombre_edi" name="nombre_edi" value="{{ old('nombre_editorial') }}">
        </div>
        <div>
            <label for="pais_editorial">Pais:</label>
            <input type="text" id="pais" name="pais" value="{{ old('pais_editorial') }}">
        </div>
        <div>
            <button type="submit" id="guardar-autor">Guardar Editorial</button>
        </div>
    </form>


    <!-- Recursos -->
    <form id="form-recurso" method="POST" action="{{ route('recursos.guardar') }}" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="titulo">Título del Recurso:</label>
            <input type="text" id="titulo" name="titulo" value="{{ old('titulo') }}">
        </div>
        <div>
            <label for="descripcion">Descripción del Recurso:</label>
            <textarea id="descripcion" name="descripcion">{{ old('descripcion') }}</textarea>
        </div>
        <div>
            <label for="imagen">Imagen:</label>
            <input type="file" id="imagen" name="imagen">
        </div>
        <div>
            <button type="button" id="guardar-recurso">Guardar Recurso</button>
        </div>
    </form>
</body>
</html>
