<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorías</title>
</head>
<body>
<div class="row">
    @foreach($categorias as $categoria)
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $categoria->nombre }}</h5>
                    <p class="card-text">{{ $categoria->descripcion }}</p>
                    <a href="#" class="btn btn-primary">Ver recursos</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
    
</body>
</html>