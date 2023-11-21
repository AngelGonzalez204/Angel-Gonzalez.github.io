<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Invitaciones - BE HAPPY</title>
    <!-- Agrega la hoja de estilo de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Agrega estilos personalizados -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            background-image: url('img/background.jpg'); /* Agrega la imagen de fondo */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            color: #333;
        }

        header {
            background-color: #d2dbe4 !important;
        }

        footer {
            background-color: #cbdae8 !important;
        }

        /* Agrega estilos para el catálogo */
        #catalogo {
            padding: 40px 0;
        }

        .invitacion {
            margin-bottom: 30px;
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .invitacion img {
            max-width: 100%;
            height: auto;
            border-radius: 10px 10px 0 0; /* Bordes redondeados en la parte superior */
        }

        .invitacion-content {
            padding: 20px;
        }

        .descargar-btn {
            margin-top: 10px;
        }

        /* Estilos para el formulario de búsqueda */
        #buscador {
            margin-bottom: 30px;
        }

        .search-form {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 10px;
            border-radius: 10px;
        }

        /* Estilos para el carrito de compras */
        #carrito {
            text-align: right;
            margin-top: 20px;
            margin-right: 20px;
        }

        #carrito a {
            color: #fff;
            text-decoration: none;
            font-size: 18px;
        }

        #carrito i {
            margin-right: 5px;
        }

    </style>
</head>
<body>
    <header>
        <!-- Barra de navegación -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">BE HAPPY</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="Index.php">Inicio</a></li>
                    <li class="nav-item active"><a class="nav-link" href="Catálogo de invitaciones.php">Catálogo de invitaciones</a></li>
                    <li class="nav-item"><a class="nav-link" href="Medios de pagos.php">Medios de Pagos</a></li>
                    <li class="nav-item"><a class="nav-link" href="Horarios de Atención.php">Horarios de Atención</a></li>
                    <li class="nav-item"><a class="nav-link" href="Contáctenos.php">Contáctenos</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <!-- Carrito de compras -->
        <section id="carrito">
            <a href="#"><i class="fas fa-shopping-cart"></i> Carrito</a>
        </section>

        <!-- Formulario de búsqueda -->
        <section id="buscador" class="container">
            <form class="form-inline search-form">
                <input class="form-control mr-sm-2" type="search" placeholder="Buscar invitación" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
            </form>
        </section>

        <!-- Catálogo de invitaciones -->
        <section id="catalogo" class="container">
            <h2 class="text-center mb-4">Catálogo de Invitaciones</h2>

            <!-- Invitación 1 -->
            <div class="invitacion row">
                <div class="col-md-6">
                    <img src="img/invitacion1.jpg" alt="Invitación 1" class="img-fluid">
                </div>
                <div class="col-md-6 invitacion-content">
                    <h4>Invitación Elegante</h4>
                    <p>Una invitación elegante para ocasiones especiales.</p>
                    <a href="descargar.php?id=1" class="btn btn-primary descargar-btn">Descargar</a>
                </div>
            </div>

            <!-- Invitación 2 -->
            <div class="invitacion row">
                <div class="col-md-6">
                    <img src="img/invitacion2.jpg" alt="Invitación 2" class="img-fluid">
                </div>
                <div class="col-md-6 invitacion-content">
                    <h4>Invitación Floral</h4>
                    <p>Una invitación con diseño floral perfecta para eventos primaverales.</p>
                    <a href="descargar.php?id=2" class="btn btn-primary descargar-btn">Descargar</a>
                </div>
            </div>

            <!-- Invitación 3 -->
            <div class="invitacion row">
                <div class="col-md-6">
                    <img src="img/invitacion3.jpg" alt="Invitación 3" class="img-fluid">
                </div>
                <div class="col-md-6 invitacion-content">
                    <h4>Invitación Floral</h4>
                    <p>Una invitación con diseño floral perfecta para eventos primaverales.</p>
                    <a href="descargar.php?id=3" class="btn btn-primary descargar-btn">Descargar</a>
                </div>
            </div>

            <!-- Invitación 4 -->
            <div class="invitacion row">
                <div class="col-md-6">
                    <img src="img/invitacion4.jpg" alt="Invitación 4" class="img-fluid">
                </div>
                <div class="col-md-6 invitacion-content">
                    <h4>Invitación Floral</h4>
                    <p>Una invitación con diseño floral perfecta para eventos primaverales.</p>
                    <a href="descargar.php?id=4" class="btn btn-primary descargar-btn">Descargar</a>
                </div>
            </div>

            <!-- Invitación 5 -->
            <div class="invitacion row">
                <div class="col-md-6">
                    <img src="img/invitacion5.jpg" alt="Invitación 5" class="img-fluid">
                </div>
                <div class="col-md-6 invitacion-content">
                    <h4>Invitación Floral</h4>
                    <p>Una invitación con diseño floral perfecta para eventos primaverales.</p>
                    <a href="descargar.php?id=5" class="btn btn-primary descargar-btn">Descargar</a>
                </div>
            </div>

            <!-- Invitación 6 -->
            <div class="invitacion row">
                <div class="col-md-6">
                    <img src="img/invitacion6.jpg" alt="Invitación 6" class="img-fluid">
                </div>
                <div class="col-md-6 invitacion-content">
                    <h4>Invitación Floral</h4>
                    <p>Una invitación con diseño floral perfecta para eventos primaverales.</p>
                    <a href="descargar.php?id=6" class="btn btn-primary descargar-btn">Descargar</a>
                </div>
            </div>

            <!-- Invitación 7 -->
            <div class="invitacion row">
                <div class="col-md-6">
                    <img src="img/invitacion7.jpg" alt="Invitación 7" class="img-fluid">
                </div>
                <div class="col-md-6 invitacion-content">
                    <h4>Invitación Floral</h4>
                    <p>Una invitación con diseño floral perfecta para eventos primaverales.</p>
                    <a href="descargar.php?id=7" class="btn btn-primary descargar-btn">Descargar</a>
                </div>
            </div>

            <!-- Invitación 8 -->
            <div class="invitacion row">
                <div class="col-md-6">
                    <img src="img/invitacion8.jpg" alt="Invitación 8" class="img-fluid">
                </div>
                <div class="col-md-6 invitacion-content">
                    <h4>Invitación Floral</h4>
                    <p>Una invitación con diseño floral perfecta para eventos primaverales.</p>
                    <a href="descargar.php?id=8" class="btn btn-primary descargar-btn">Descargar</a>
                </div>
            </div>
            <!-- Puedes agregar más invitaciones siguiendo el mismo formato -->

        </section>
    </main>

    <footer class="bg-dark text-light text-center mt-5 py-3">
        <p>&copy; 2023 BE HAPPY. Todos los derechos reservados.</p>
    </footer>

    <!-- Scripts de Bootstrap y Font Awesome (para el icono del carrito) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/your-fontawesome-kit-id.js" crossorigin="anonymous"></script> <!-- Reemplaza 'your-fontawesome-kit-id' con tu ID de kit Font Awesome -->
</body>
</html>