<?php
session_start();

if($_POST){
    if(($_POST['usuario']=="luis")&&($_POST['contraseña']=="barcelona")){
        $_SESSION['usuario']="ok";
        $_SESSION['nombreUsuario']="luis";
        header("Location:http://127.0.0.1/php_web/administrador/inicio.php");
        //Location: http://127.0.0.1/sitio_web/administrador/inicio.php
        exit();
    } else {
        $mensaje="errorrrr";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <div class="container">
    <br><br><br>     
    <div class="row">
          
        <div class="col-md-4"></div>
            <?php  if(isset($mensaje)){ ?>
                <div
                    class="alert alert-primary"
                    role="alert"
                >
                    <strong>Alert Heading</strong> error
                </div>
                
              <?php echo $mensaje ?>
            <?php } ?>


            <div class="col-md-4">
                <div class="card">
                    <form class="form-horizontal" action="" method="post">
                        <div class="ms-3">
                            <label for="" class="form-label">Usuario</label>
                            <input
                                type="text"
                                name="usuario"
                                class="form-control"
                                placeholder="escribe tu usuario"
                                aria-describedby="helpId"
                            />
                            <small id="helpId" class="text-muted">Help text</small>
                        </div>
                        <div class="ms-3">
                            <label for="" class="form-label">Contraseña</label>
                            <input
                                type="password"
                                name="contraseña"
                                class="form-control"
                                placeholder="escribe tu contraseña"
                                aria-describedby="helpId"
                            />
                            <small id="helpId" class="text-muted">Help text</small>
                            <br>
                            <button class="btn btn-primary" type="submit">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>