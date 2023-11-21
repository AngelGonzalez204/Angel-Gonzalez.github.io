<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BE HAPPY</title>
    <!-- Agrega la hoja de estilo de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="Css/Index.css">
</head>
<body>
    <header>
        <!-- Agrega clases de Bootstrap para la barra de navegación -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">BE HAPPY</a>
            <!-- Agrega el botón de hamburguesa para dispositivos móviles -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Agrega los enlaces de navegación y sus clases de Bootstrap -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="Index.php">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="Catálogo de invitaciones.php">Catálogo de invitaciones</a></li>
                    <li class="nav-item"><a class="nav-link" href="Medios de pagos.php">Medios de Pagos</a></li>
                    <li class="nav-item"><a class="nav-link" href="Horarios de Atención.php">Horarios de Atención</a></li>
                    <li class="nav-item"><a class="nav-link" href="Contáctenos.php">Contáctenos</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <!-- Agrega el video de fondo con Bootstrap -->
        <div id="video-background">
            <video autoplay muted loop id="myVideo">
                <source src="video/gfp-astro-timelapse.mp4" type="video/mp4">
                Tu navegador no soporta el elemento de video.
            </video>
        </div>
        
        <!-- Agrega la sección de inicio con Bootstrap -->
        <section id="inicio" class="jumbotron text-center mt-5">
            <div class="container">
                <h2 class="display-4">¡Bienvenido a BE HAPPY - Tu Destino Creativo para Invitaciones Especiales!</h2>
                <p class="lead">"Bienvenido a Be Happy, la página más creativa para sus invitaciones".</p>
            </div>
        </section>
        
        <!-- Agrega la sección SOBRE NOSOTROS con Bootstrap -->
        <section id="SOBRE_NOSOTROS" class="container mt-5">
            <h3 class="text-center mb-4">SOBRE NOSOTROS</h3>
            <div class="row">
                <div class="col-md-6">
                    <h5>En BE HAPPY, creemos que cada momento especial merece una celebración única.</h5>
                    <p>Nos enorgullece ser tu compañero de confianza en la emocionante jornada de planificar y compartir esos momentos inolvidables con tus seres queridos.</p>
                    <p>Somos más que una plataforma de creación de invitaciones; somos tus aliados para transformar ideas en experiencias memorables.</p>
                </div>
                <div class="col-md-6">
                    <h5>Nuestro compromiso es simple pero poderoso: diseñar invitaciones que despierten emociones.</h5>
                    <p>Capturamos la esencia de tu evento en cada diseño, desde bodas y cumpleaños hasta graduaciones y mucho más.</p>
                    <p>Nos esforzamos por superar tus expectativas, brindándote herramientas intuitivas y una amplia gama de diseños para que cada invitación refleje tu estilo y personalidad.</p>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-12">
                    <h5>Con BE HAPPY, la creación de invitaciones se convierte en un viaje creativo y sin complicaciones.</h5>
                    <p>Explora nuestra colección, personaliza tu invitación con unos pocos clics y descárgala rápidamente para compartir la noticia con el mundo.</p>
                    <p>No solo creamos invitaciones, creamos momentos que perduran.</p>
                    <h5 class="mt-4">Únete a nosotros en este viaje lleno de alegría y creatividad. ¡Prepárate para celebrar la felicidad en cada detalle!</h5>
                </div>
            </div>
        </section>

        <!-- Agrega la imagen de Be Happy con Bootstrap -->
        <div id="fondo-imagen" class="container text-center mt-5">
            <img src="Img/Logobehappy.jpg" width="300" height="200" class="img-fluid" alt="Logobehappy">
        </div>
    </main>

    <footer class="bg-dark text-light text-center mt-5 py-3">
        <p>&copy; 2023 BE HAPPY. Todos los derechos reservados.</p>
    </footer>

    <!-- Agrega los scripts de Bootstrap (jQuery y Popper.js) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>