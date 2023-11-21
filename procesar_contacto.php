<?php
// Función para limpiar y validar datos del formulario
function validarDatosFormulario($dato) {
    $dato = trim($dato);
    $dato = stripslashes($dato);
    $dato = htmlspecialchars($dato);
    return $dato;
}

// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "behappydb";

// Verificar la conexión
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

// Validar y limpiar datos del formulario
$nombre = validarDatosFormulario($_POST['contact_nom']);
$correo = validarDatosFormulario($_POST['contact_email']);
$telefono = validarDatosFormulario($_POST['contact_phone']);
$mensaje = validarDatosFormulario($_POST['contact_message']);

// Insertar datos en la tabla de contactos utilizando una consulta preparada
$sql = "INSERT INTO contactos (nombre, correo, telefono, mensaje) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);

if ($stmt) {
    // Vincular los parámetros
    $stmt->bind_param("ssss", $nombre, $correo, $telefono, $mensaje);

    // Ejecutar la consulta preparada
    if ($stmt->execute()) {
        // No mostrar ningún mensaje en producción para evitar revelar información sensible
        // Redirigir a la misma página para evitar el reenvío del formulario al actualizar la página
        header("Location: {$_SERVER['HTTP_REFERER']}");
        exit();
    } else {
        // Manejar errores de ejecución
        echo "Error al guardar datos: " . $stmt->error;
    }

    // Cerrar la consulta preparada
    $stmt->close();
} else {
    // Manejar errores de preparación de consulta
    echo "Error al preparar la consulta: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>