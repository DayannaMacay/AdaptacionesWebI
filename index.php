<?php
session_start(); // Inicia la sesión

// Verifica si la variable de sesión está configurada y muestra el mensaje
if (isset($_SESSION['registro_exitoso'])) {
    if ($_SESSION['registro_exitoso']) {
        echo '<div class="alert alert-success">' . $_SESSION['mensaje_registro'] . '</div>';
    } else {
        echo '<div class="alert alert-danger">' . $_SESSION['mensaje_registro'] . '</div>';
    }

    // Borra las variables de sesión para que no se muestren en futuras visitas
    unset($_SESSION['registro_exitoso']);
    unset($_SESSION['mensaje_registro']);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index php</title>
</head>
<body>
    
    <?php
        include("vista/registro-login.php");
    ?>

</body>
</html>