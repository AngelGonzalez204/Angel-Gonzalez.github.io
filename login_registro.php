<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "behappydb";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

// Inicio de Sesión
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login_submit'])) {
    $usuario = validarDatosFormulario($_POST['login_usuario']);
    $contrasena = validarDatosFormulario($_POST['login_contrasena']);

    $sql = "SELECT id, usuario, contrasena FROM usuarios WHERE usuario = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $usuario);
    $stmt->execute();
    $stmt->bind_result($id, $dbUsuario, $dbContrasena);

    if ($stmt->fetch() && password_verify($contrasena, $dbContrasena)) {
        // Inicio de sesión exitoso
        // Puedes almacenar información del usuario en las variables de sesión si es necesario
        session_start();
        $_SESSION['id'] = $id;
        $_SESSION['usuario'] = $dbUsuario;

        // Redirige a la página de inicio (Index.php)
        header("Location: Index.php");
        exit();
    } else {
        // Usuario o contraseña incorrectos
        echo "Usuario o contraseña incorrectos";
    }

    $stmt->close();
}

// Crear Cuenta
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['registro_submit'])) {
    $usuario = validarDatosFormulario($_POST['registro_usuario']);
    $correo = validarDatosFormulario($_POST['registro_correo']);
    $contrasena = validarDatosFormulario($_POST['registro_contrasena']);

    // Hashear la contraseña antes de almacenarla en la base de datos
    $hashContrasena = password_hash($contrasena, PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuarios (usuario, correo, contrasena) VALUES (?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $usuario, $correo, $hashContrasena);

    if ($stmt->execute()) {
        // Registro exitoso
        echo "Cuenta creada exitosamente. Inicie sesión para continuar.";
    } else {
        // Manejar errores de registro
        echo "Error al crear la cuenta: " . $stmt->error;
    }

    $stmt->close();
}

// Función para limpiar y validar datos del formulario
function validarDatosFormulario($dato) {
    $dato = trim($dato);
    $dato = stripslashes($dato);
    $dato = htmlspecialchars($dato);
    return $dato;
}

// Cerrar la conexión
$conn->close();
?>