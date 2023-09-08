<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Dayanna Macay">
    <meta name="keywords" content="Netflix Disney Amazon Hbo Spotify Paramount">
    <meta name="description" content="Plataformas Digitales">
    <!--Descargamos Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!--Linkeamos la plantilla de Bootswatch para el diseño de la pagina-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--Descargamos los iconos del Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!--Descargamos google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&family=Saira&display=swap" rel="stylesheet">

    <!--Linkeamos los estilos-->
    <link rel="stylesheet" href="css/estilos.css">

    <title>REGISTRO E INICIO DE SESIÓN</title>
</head>
<body class="registro-login">
    <header>
        <center><img src="imagenes/logoempresa.png" alt="logo" width="150" height="80"></center>
    </header>
    <hr>

    <section>
        <center><div class="container-fluid d-flex">    
            <!--FORMULARIO REGISTRO-->
            <form action="modelo/registro.php" method="post" class="col-lg-6" id="formulario-registro">
                <h5 class="text-primary">REGISTRO</h5>
                <div class="form-group">
                    <label for="exampleInput" class="form-label mt-1">Ingrese su nombre</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" required>
                </div>
                <div class="form-group">
                    <label for="exampleInput" class="form-label mt-1">Ingrese su apellido</label>
                    <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Apellido" required>
                </div>
                <div class="form-group">
                    <label for="exampleInput" class="form-label mt-1">Nombre de usuario</label>
                    <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Usuario" required>
                </div>
                <div class="form-group">
                    <label for="exampleInput" class="form-label mt-1">Contraseña</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Contraseña" required>
                </div>
                <div class="form-group">
                    <label for="exampleInput" class="form-label mt-1">Número de telefono</label>
                    <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Telefono" required>
                </div>
                <!--BOTON DE REGISTRARSE-->
                <button class="btn btn-primary" type="submit"><i class="bi bi-person" id="btn-regitrarse"></i> Registrarse</button>
            </form>
            <!--FORMULARIO INICIO DE SESION-->
            <form action="login.php" method="post" class="col-lg-6 formulario-login bg">
                <h5 class="text-success">INICIO DE SESIÓN</h5>
                <div class="form-group">
                    <label for="exampleInput" class="form-label mt-1">Ingrese su usuario</label>
                    <input type="text" class="form-control" name="usuarioI" id="usuarioI" placeholder="Usuario" required>
                </div>
                <div class="form-group">
                    <label for="exampleInput" class="form-label mt-1">Ingrese su contraseña</label>
                    <input type="password" class="form-control" name="passwordI" id="passwordI" placeholder="Contraseña" required>
                </div>
                <!--BOTON DE INICIAR SESION-->
                <button type="submit" class="btn btn-success" id="btn-iniciar-sesion"><i class="bi bi-person-fill"></i>Iniciar Sesion</button>
                <!--Carrusel-->
                <div id="carouselExampleInterval" class="carousel slide mt-3" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active" data-bs-interval="3000">
                        <a href="#plataformas"><img src="imagenes/cllg-plataformas1.jpg" alt="plataformas" width="450" height="200"></a> 
                      </div>
                      <div class="carousel-item" data-bs-interval="3000">
                        <a href="#plataformas"><img src="imagenes/cllg-plataformas2.jpg" alt="plataformas" width="450" height="200"></a> 
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </form>
    </div></center>
    </section>
    

    <script src="js/formulario.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    
</body>
</html>