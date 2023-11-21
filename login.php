<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="Css/login.css">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <title>Formulario de inicio de sesión y registro</title>
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


    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
        <form action="login_registro.php" method="post" class="sign-in-form">
    <h2 class="title">Iniciar sesión</h2>
    <div class="input-field">
        <i class="fas fa-user"></i>
        <input type="text" name="login_usuario" placeholder="USUARIO" />
    </div>
    <div class="input-field">
        <i class="fas fa-lock"></i>
        <input type="password" name="login_contrasena" placeholder="CONTRASEÑA" />
    </div>
    <input type="submit" name="login_submit" value="INICIAR SESION" class="btn solid" />
    <p class="social-text">INICIE SESION CON LAS PLATAFORMAS SOCIALES</p>
            <div class="social-media">
            <a href="https://www.facebook.com/?stype=lo&deoia=1&jlou=AfcAClTy
              U9sO8IAVVGjxdSCx2hzPu835K7HWD30WbKzl4FJHvQ79QhjkU7zm_6Ys7DuC3ZCiP
              5Sw3ZJPqaKGYn4vDoZS0gD8njAh-d3oUd3MmQ&smuh=55474&lh=Ac8lM2y32Yf25
              44WycU"class="social-icon">
              <i class="fab fa-facebook-f"></i>
              </a>

              <a href="https://twitter.com/" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="https://myaccount.google.com/intro/security?hl=es" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="https://www.linkedin.com/login/es/" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
              <a href="https://www.pinterest.com.mx/" class="social-icon">
              <i class="fab fa-pinterest"></i>
              </a>
            </div>
          </form>

          <form action="login_registro.php" method="post" class="sign-up-form">
    <h2 class="title">Crear cuenta</h2>
    <div class="input-field">
        <i class="fas fa-user"></i>
        <input type="text" name="registro_usuario" placeholder="USUARIO" />
    </div>
    <div class="input-field">
        <i class="fas fa-envelope"></i>
        <input type="email" name="registro_correo" placeholder="CORREO" />
    </div>
    <div class="input-field">
        <i class="fas fa-lock"></i>
        <input type="password" name="registro_contrasena" placeholder="CONTRASEÑA" />
    </div>
    <input type="submit" name="registro_submit" class="btn" value="Crear cuenta"/>
    <p class="social-text">CREAR CUENTA CON LAS PLATAFORMAS SOCIALES</p>
    <div class="social-media">
              <a href="https://www.facebook.com/?stype=lo&deoia=1&jlou=AfcAClTy
              U9sO8IAVVGjxdSCx2hzPu835K7HWD30WbKzl4FJHvQ79QhjkU7zm_6Ys7DuC3ZCiP
              5Sw3ZJPqaKGYn4vDoZS0gD8njAh-d3oUd3MmQ&smuh=55474&lh=Ac8lM2y32Yf25
              44WycU" class="social-icon"><i class="fab fa-facebook-f"></i>
              </a>
              <a href="https://twitter.com/" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="https://myaccount.google.com/intro/security?hl=es" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="https://www.linkedin.com/login/es/" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
              <a href="https://www.pinterest.com.mx/" class="social-icon">
              <i class="fab fa-pinterest"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>¿Eres nuevo con Be happy?</h3>
            <p>
            "¿Eres nuevo en Be Happy? Será un honor tenerte con nosotros. 
            Por favor, crea una cuenta y disfruta de las mejores plantillas 
            para tus invitaciones digitales con Be Happy. ¡Saludos!"
            </p>
            <button class="btn transparent" id="sign-up-btn">
             CREAR CUENTA</button>
          </div>
          <img src="Img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3> "¿Uno de nosotros?"</h3>
            <p>
            "¡Regresa y únete a la familia Be Happy! Descubre la 
            alegría que compartimos. ¡Bienvenido de vuelta a nuestro 
            rincón de felicidad! Inicia sesión ahora."
            </p>
            <button class="btn transparent" id="sign-in-btn">
              INICIAR SESION</button>
          </div>
          <img src="Img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <footer class="bg-dark text-light text-center mt-5 py-3">
        <p>&copy; 2023 BE HAPPY. Todos los derechos reservados.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="Js/login.js"></script>
  </body>
</html>