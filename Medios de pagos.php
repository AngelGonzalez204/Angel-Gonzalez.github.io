<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BE HAPPY - Medios de Pago</title>
    <!-- Agrega la hoja de estilo de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="Css/Medios de pagos.css">
</head>
<body style="background: url('Img/Fondo3.jpg') no-repeat center center fixed; background-size: cover;">
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
                    <li class="nav-item active"><a class="nav-link" href="Medios de pagos.php">Medios de Pago</a></li>
                    <li class="nav-item"><a class="nav-link" href="Horarios de Atención.php">Horarios de Atención</a></li>
                    <li class="nav-item"><a class="nav-link" href="Contáctenos.php">Contáctenos</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <!-- Sección de Medios de Pago -->
        <section id="medios-pago" class="container mt-5">
            <h3 class="text-center mb-4">MEDIOS DE PAGOS</h3>
            <div class="row">
                <div class="col-md-4">
                    <div class="medio-pago">
                        <img src="img/Tarjeta de credito.Jpg" alt="Tarjeta de Crédito" class="img-fluid">
                        <h4>Tarjeta de Crédito</h4>
                        <p>Aceptamos pagos con tarjetas de crédito Visa, MasterCard, y American Express.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="medio-pago">
                        <img src="img/Tarjeta de debito.Jpg" alt="Tarjeta de Débito" class="img-fluid">
                        <h4>Tarjeta de Débito</h4>
                        <p>Realiza pagos fácilmente con tu tarjeta de débito.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="medio-pago">
                        <img src="img/Transferencia bancaria.Jpg" alt="Transferencia Bancaria" class="img-fluid">
                        <h4>Transferencia Bancaria</h4>
                        <p>Transfiere el monto directamente desde tu cuenta bancaria.</p>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="medio-pago">
                        <img src="img/Pagos en oxxo.Jpg" alt="OXXO" class="img-fluid">
                        <h4>Pago en OXXO</h4>
                        <p>Realiza pagos en efectivo en cualquier tienda OXXO.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="medio-pago">
                        <img src="img/paypal.jpg" alt="PayPal" class="img-fluid">
                        <h4>PayPal</h4>
                        <p>Realiza pagos de forma segura con PayPal.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="medio-pago">
                        <img src="img/Mercado pago.Jpg" alt="MercadoPago" class="img-fluid">
                        <h4>MercadoPago</h4>
                        <p>Paga tus compras con MercadoPago de manera fácil y rápida.</p>
                    </div>
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