<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('styles/welcome.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Home</title>
</head>

<body>
    <header>
        <nav id= "barra"class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="/">eLibroPlanet</a>
        </nav>
    </header>

    <section> 
        <h3>¿Qué somos?</h3>
        <p>eLibroPlanet es una plataforma digital que ofrece una extensa variedad de recursos educativos en formato digital.
            Nuestro objetivo es proporcionar a estudiantes, educadores y profesionales una biblioteca digital completa y accesible.</p>
    </section>

    <div class="d-flex justify-content-between">
        <div class="card">
            <img src="{{ asset('img/home/imagen1.jpg') }}" class="card-img-top">
            <div class="card-body">
                <p class="card-text">Nuestra plataforma ofrece una amplia gama de recursos educativos para estudiantes de todos los niveles. 
                  Desde libros de texto electrónicos hasta artículos académicos e información complementaria que apoyan el éxito académico de los estudiantes en todas las áreas de estudio.
                </p>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('img/home/imagen2.jpg') }}" class="card-img-top">
            <div class="card-body">
                <p class="card-text">Proporciona a los maestros una extensa colección de recursos pedagógicos para enriquecer su práctica docente. 
                  Desde planificaciones metodológicas hasta materiales educativos complementarios y artículos académicos, que respaldan el desarrollo educativo de los maestros.
                </p>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('img/home/imagen3.jpg') }}" class="card-img-top">
            <div class="card-body">
                <p class="card-text">Nuestra plataforma ofrece una amplia selección de libros electrónicos que abarcan diversos géneros literarios, desde ficción y no ficción hasta libros de interés general.
                  Ofreciendo contenido relevante que enriquezca su vida personal y su búsqueda de conocimiento.
                </p>
            </div>
        </div>
    </div>

    <h4>Echa un vistazo a lo que puedes encontrar</h4>

    <div id="carrusel1-container">
        <div id="carrusel1" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('img/home/imagen4.jpg') }}" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/home/imagen5.jpeg') }}" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/home/imagen6.jpg') }}" class="d-block w-100">
                </div>
            </div>
        </div>
        <p id="txt1">Sumérgete en nuestro catálogo de imágenes literarias y deja que la creatividad y la imaginación 
         te transporten a nuevos mundos literarios.
        </p> 
    </div>

    <div id="carrusel2-container">
        <p id="txt2">En nuestro apartado dedicado a los recursos para maestros, los usuarios encontrarán una amplia variedad 
            de herramientas y materiales diseñados para enriquecer y apoyar su labor educativa. 
        </p> 
        <div id="carrusel2" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('img/home/imagen7.jpg') }}" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/home/imagen8.jpg') }}" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/home/imagen9.jpg') }}" class="d-block w-100">
                </div>
            </div>
        </div>
    </div>

     
    

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
<footer>
        <a class="btn" id="btn1" href="/about">Acerca de nosotros</a>
    </footer>
</html>

