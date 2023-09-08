<?php
    include 'modelo/conexion.php';
    $usuarioI=$_POST['usuarioI'];
    $passwordI=$_POST['passwordI'];

    $consulta="SELECT * FROM registro WHERE usuario='$usuarioI' and contrasenia='$passwordI'";

    $resultado=mysqli_query($conexion,$consulta);

    $filas=mysqli_num_rows($resultado);

    if($filas>0){
        header("location:compras.html");
        
    } else {
        echo '<script>
            alert("El usuario no existe, por favor registrese.");
            window.history.go(-1);
            </script>';
        exit;
    } 

    mysqli_free_result($resultado);
    mysqli_close($conexion);
?>