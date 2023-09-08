<?php
    include 'conexion.php';
    $cuenta = $_POST['cuenta'];
    $valor = $_POST['valor'];
    $numtransaccion = $_POST['numtransaccion'];
    $precio = $_POST['precio'];
    $comprobante = $_POST['comprobante'];
    $telefono = $_POST['telefono'];

    $consulta = "INSERT into pagos(cuenta, valor, numtransaccion, precio, comprobante, telefono) values('$cuenta', '$valor', '$numtransaccion', '$precio', '$comprobante', '$telefono');";

    $resultado = mysqli_query($conexion, $consulta);

    if($resultado){
        echo '<script>
            alert("Registro exitoso, un distribuir se comunicara contigo lo mas pronto posible. Gracias por tu paciencia.");
            window.history.go(-2);
            </script>';
        exit;
    } else {
        echo '<script>
            alert("Registro fallido");
            window.history.go(-1);
            </script>';
        exit;
    }

    mysqli_close($conexion);
?>

