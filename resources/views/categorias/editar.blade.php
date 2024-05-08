<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Categoría</title>
</head>
<body>
    <div class="container">
        <h1>Editar Categoría</h1>
        
        <form action="{{ route('categorias.actualizar', $categoria) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT') 
            
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $categoria->nombre }}">
            </div>
            
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea class="form-control" id="descripcion" name="descripcion">{{ $categoria->descripcion }}</textarea>
            </div>
            
            <div class="form-group">
                <label for="imagen">Imagen Actual</label><br>
                <img src="{{ asset($categoria->imagen) }}" alt="Imagen Actual">
            </div>
            <div class="form-group">
                <label for="imagen">Subir Nueva Imagen</label>
                <input type="file" class="form-control-file" id="imagen" name="imagen">
            </div>
            
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</body>
</html>
