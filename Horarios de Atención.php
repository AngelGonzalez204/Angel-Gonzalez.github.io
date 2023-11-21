<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horarios de Atención</title>
    <!-- Agrega la hoja de estilo de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            color: #343a40;
            padding-top: 56px;
        }

        header {
            background-color: #343a40;
            color: #fff;
            padding: 15px 0;
        }

        #horarios {
            padding: 40px 0;
        }

        .dias {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .dia {
            background-color: #007bff;
            color: #fff;
            border-radius: 10px;
            padding: 20px;
            margin: 10px;
            text-align: center;
            transition: transform 0.3s ease-in-out;
            cursor: pointer;
            width: 200px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .dia:hover {
            transform: scale(1.05);
        }

        h2 {
            color: #007bff;
        }

        footer {
            background-color: #343a40;
            color: #fff;
            padding: 15px 0;
        }
    </style>
</head>
<body>
    <header>
        <!-- Barra de navegación -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <a class="navbar-brand" href="#">BE HAPPY</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="Index.php">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="Catálogo de invitaciones.php">Catálogo de invitaciones</a></li>
                    <li class="nav-item"><a class="nav-link" href="Medios de pagos.php">Medios de Pago</a></li>
                    <li class="nav-item active"><a class="nav-link" href="Horarios de Atención.php">Horarios de Atención</a></li>
                    <li class="nav-item"><a class="nav-link" href="Contáctenos.php">Contáctenos</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <!-- Sección de Horarios de Atención -->
        <section id="horarios" class="container">
            <h2 class="text-center mb-4">Horarios de Atención</h2>
            <div class="dias">
                <div class="dia">
                    <h3>Lunes</h3>
                    <p>9:00 AM - 6:00 PM</p>
                </div>
                <div class="dia">
                    <h3>Martes</h3>
                    <p>9:00 AM - 6:00 PM</p>
                </div>
                <div class="dia">
                    <h3>Miércoles</h3>
                    <p>9:00 AM - 6:00 PM</p>
                </div>
                <div class="dia">
                    <h3>Jueves</h3>
                    <p>9:00 AM - 6:00 PM</p>
                </div>
                <div class="dia">
                    <h3>Viernes</h3>
                    <p>9:00 AM - 8:00 PM</p>
                </div>
                <div class="dia">
                    <h3>Sábado</h3>
                    <p>10:00 AM - 4:00 PM</p>
                </div>
                <div class="dia">
                    <h3>Domingo</h3>
                    <p>Cerrado</p>
                </div>
            </div>
        </section>
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