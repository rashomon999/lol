<?php
session_start();

if (isset($_SESSION['usuario']) && $_SESSION['usuario'] == "ok") {
    // El usuario ha iniciado sesión correctamente
    $nombreUsuario = $_SESSION["nombreUsuario"];
} elseif ($_POST && ($_POST['usuario'] == "luis") && ($_POST['contraseña'] == "barcelona")) {
    // Las credenciales son correctas, inicia sesión y redirige
    $_SESSION['usuario'] = "ok";
    $_SESSION['nombreUsuario'] = "luis";
    header("Location: http://127.0.0.1/php_web/administrador/inicio.php");
    /// http://127.0.0.1/sitio_web/administrador/inicio.php
    exit();
} else {
    // No se ha iniciado sesión y las credenciales no son correctas
    $nombreUsuario = "";
    $mensaje = "errorrrr";
}
?>

<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>

    <!-- Aquí se está creando una variable PHP llamada $url. Esta variable contiene la URL base del
     sitio web. $_SERVER['HTTP_HOST'] obtiene el nombre del host del servidor y se concatena
    con "/sitio_web". -->
    <?php $url="http://".$_SERVER['HTTP_HOST']."/php_web" ?>

    <nav class="navbar navbar-expand navbar-light bg-light">
        <div class="nav navbar-nav">
            <a class="nav-item nav-link active" href="#" aria-current="page"> Administrador del Sitio <span class="visually-hidden">(current)</span></a>
             
            
            <a class="nav-item nav-link" href="<?php echo $url."/administrador/inicio.php" ?>">inicio</a>
            <a class="nav-item nav-link" href="<?php echo $url."/administrador/seccion/productos.php"?>">libros</a>
            <a class="nav-item nav-link" href="<?php echo $url."/administrador/seccion/cerrar.php"?>">cerrar</a>
            <a class="nav-item nav-link" href="<?php echo $url; ?>">ver sitio web</a>

        </div>
    </nav>
    
    
    
    <div class="container">
        <div class="row">