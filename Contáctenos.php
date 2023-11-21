<!DOCTYPE html>
<!--[if lte IE 9]>
<html lang="en" class="oldie">
<![endif]-->
<!--[if gt IE 9]><!-->
<html lang="en">
<!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BE HAPPY</title>
  <link rel="stylesheet" media="all" href="Css/Contáctenos.css" />
  <!-- Agrega la hoja de estilo de Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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

<section id="contact">
    <div class="sectionheader">
        <h1>CONTACTENOS</h1>
    </div>
    <article>
        <p>"¡Saludos, estimado amigo o amiga! En Be Happy, formamos un equipo comprometido. Si tienes alguna pregunta o problema, contáctanos. Uno de nuestros representantes de atención al cliente responderá lo más pronto posible. ¡Estamos aquí para ayudarte! Saludos."</p>

        <label for="checkcontact" class="contactbutton">
            <div class="mail"></div>
        </label>
        <input id="checkcontact" type="checkbox">

        <form action="procesar_contacto.php" method="post" class="contactform">
            <p class="input_wrapper"><input type="text" name="contact_nom" value="" id="contact_nom"><label for="contact_nom">NOMBRE</label></p>
            <p class="input_wrapper"><input type="text" name="contact_email" value="" id="contact_email"><label for="contact_email">CORREO</label></p>
            <p class="input_wrapper"><input type="text" name="contact_phone" value="" id="contact_sujet"><label for="contact_sujet">TELEFONO</label></p>
            <p class="textarea_wrapper"><textarea name="contact_message" id="contact_message">MENSAJE</textarea></p>
            <p class="submit_wrapper"><input type="submit" value="ENVIAR"></p>
        </form>

        <div class="map-outer">
            <div class="gmap-canvas">
                <iframe width="90%" height="350" id="gmap-canvas" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3843.2552128872443!2d-92.2357786!3d18.6182399!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85f1cf4d0416007f%3A0x7d1f047111e79745!2sUniversidad%20Tecnol%C3%B3gica%20de%20Campeche!5e0!3m2!1ses-419!2sttu!4v1616025904647!5m2!1ses-419!2sttu" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            </div>
        </div>
    </article>
</section>

<footer class="bg-dark text-light text-center mt-5 py-3">
    <p>&copy; 2023 BE HAPPY. Todos los derechos reservados.</p>
</footer>

</body>
</html>