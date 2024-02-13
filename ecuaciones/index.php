<?php
// el name es lo importante
$primero='';

if($_POST){
$primero = isset($_POST['primero'])?($_POST['primero']):'';

// echo $primero;

 if($primero === '-6x+4y < -8z-10'){
     $verificar_1 = "correcto";
 }elseif($primero === ''){
     $verificar_1 = '';
 }else{
     $verificar_1 = "incorrecto";
    }

$boolean = isset($_POST['boolean'])?$_POST['boolean']:'';

if($boolean === 'true'){
    $boolean_1 = "correcto";
}elseif($boolean === ''){
    $boolean_1 = '';
}else{
    $boolean_1 = "incorrecto";
}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Ecuaciones</title>
    <script>
        function handleSubmit(event) {
            event.preventDefault();

            const formData = new FormData(event.target);

            fetch(event.target.action, {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(html => {
                document.body.innerHTML = html;
            })
            .catch(error => {
                console.error('Error al enviar el formulario:', error);
            });
        }
    </script>
        <script>
            function mostrarImagen() {
            var imagen = document.getElementById('imagen');

            // Mostrar la imagen
            imagen.style.display = 'block';
            }

            function ocultarImagen() {
            var imagen = document.getElementById('imagen');

            // Ocultar la imagen al soltar el botón
            imagen.style.display = 'none';
            }
        </script>
    
</head>
<body>
    <div class="seccion izquierda">
        <form action="./index.php" method="POST" onsubmit="handleSubmit(event)">
        <span class="titulo_1"><h2>ejercicio_1:</h2></span>
        <br><br>
        <img src="../img/Captura de pantalla 2024-02-12 103212.png" alt=""><br><br>
        El resultado de multiplicar por -2 a ambos lados es: <br><br>
        <input style="margin:10px;" value="-6x+4y < -8z-10" type="radio" name="primero" id="primero1" <?php echo isset($primero) && ($primero === '-6x+4y < -8z-10')?'checked':''; ?>>-6x+4y < -8z-10

        <input style="margin:10px;" value="-6x+2y < -8z-5" type="radio" name="primero" id="primero2" <?php if($primero === '-6x+2y < -8z-5') echo 'checked'; ?>>-6x+2y < -8z-5
        <br><br>
        <button class="btn btn-primary" type="submit">Submit</button>
        <?php echo isset($verificar_1)?$verificar_1:''; ?>

        <br><br><br>
        <!-- ///////// -->
        <span class="titulo_1"><h2>ejercicio_2:</h2></span>
        <br><br>
        <img src="../img/Captura de pantalla 2024-02-12 120811.png" alt="">
        <br><br>
        Es cierta la igualdad?<br><br>
        <input type="radio" name="boolean" id="" value="true" <?php echo isset($boolean) && $boolean === 'true'?'checked':''; ?>>True
        <input type="radio" name="boolean" id="" value="false" <?php echo isset($boolean) && $boolean === 'false'?'checked':''; ?>>False
        <br><br>
        <button type="submit" class="btn btn-primary">Submit</button>
        
        
        <button onmousedown="mostrarImagen()" onmouseup="ocultarImagen()">Ayuda</button>
        <img id="imagen" src="../img/Captura de pantalla 2024-02-12 130214.png" style="display: none; max-width: 100%">


        <?php echo isset($boolean_1)?$boolean_1:'';?>
        
        </form>
    </div>

    <div class="seccion derecha">
        <span class="titulo_1"></span>
    </div>

    
</body>
</html>