<?php
include 'conexion.php';
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$usuario = $_POST['usuario'];
$contrasenia = $_POST['password'];
$telefono = $_POST['telefono'];

// Validación para que no se repita el usuario
$verificar_usuario = mysqli_query($conexion, "SELECT * FROM registro WHERE usuario = '$usuario'");
if (mysqli_num_rows($verificar_usuario) > 0) {
    session_start(); // Inicia la sesión
    $_SESSION['registro_exitoso'] = false; // Indica que el registro falló
    $_SESSION['mensaje_registro'] = "El usuario ya existe, escoja otro por favor."; // Define el mensaje de error
    header("Location: http://localhost/MacBros/index.php"); // Redirige al usuario a index.php
    exit;
}

// Insertar los datos si el usuario no existe
$consulta = "INSERT INTO registro (nombre, apellido, usuario, contrasenia, telefono) VALUES ('$nombre', '$apellido', '$usuario', '$contrasenia', '$telefono')";
$resultado = mysqli_query($conexion, $consulta);

if ($resultado) {
    session_start(); // Inicia la sesión
    $_SESSION['registro_exitoso'] = true; // Indica que el registro fue exitoso
    $_SESSION['mensaje_registro'] = "Registro exitoso"; // Define el mensaje de éxito
    header("Location: http://localhost/MacBros/index.php"); // Redirige al usuario a index.php
    exit;
} else {
    session_start(); // Inicia la sesión
    $_SESSION['registro_exitoso'] = false; // Indica que el registro falló
    $_SESSION['mensaje_registro'] = "Registro fallido"; // Define el mensaje de error
    header("Location: http://localhost/MacBros/index.php"); // Redirige al usuario a index.php
    exit;
}

// Cerrar conexión
mysqli_close($conexion);
?>

