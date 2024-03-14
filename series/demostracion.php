<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="demostracion.css">
</head>
<body>

    <div class="seccion izquierda">
            <h2>Demostracion divergencia de serie armonica:</h2>
            <img size=40% width="100%" src="../img/Captura de pantalla 2024-02-29 162533.png" alt="">
            se va a crear un sucesion en la que todos los terminos cumpliran la condicion de ser menores o
            iguales a los de la sucesion inicial. <br>

            Esto se hace agrupando a partir 2 <sup>n</sup> sumandos con n inicial en 1 y sacando el dato menor del grupo seleccionado:
            <br>
            <img   size=40% width="100%" src="../img/Captura de pantalla 2024-03-01 102945.png" alt="" >
            <br> <br>
            <img size=40% width="100%" src="../img/Captura de pantalla 2024-02-29 173425.png" alt="">
            <p>si se suman estos terminos de la forma adecuada: </p>
            <img size=40% width="100%" src="../img/Captura de pantalla 2024-02-29 174019.png" alt="">
            <br>
            <p>Algo que se puede notar en  <sup>1</sup>/<sub>n</sub> es divergente y <sup>1</sup>/<sub>n <sup>2</sup></sub> es que en la primera expresion los terminos se hacen cada vez mas pequeños de una manera muy lenta, a diferencia de la segunda expresion.</p>
            <img  src="../img/Captura de pantalla 2024-03-02 214156.png" alt="">
    </div>
    
    <div class="centered-container">
        <a
        id="Anterior"
        class="btn btn-danger"
        href="armonica.php"
        role="button"
        width="50px"
        height="50px"
        >Anterior</a>

        <a
        id="siguiente"
        class="btn btn-primary"
        href="#"
        role="button"
        width="50px"
        height="50px"
        >Siguiente</a>

    </div>

    <div class="seccion derecha">   
       <img src="../img/Captura de pantalla 2024-03-02 214420.png" alt=""> <br><br>
    </div>

</body>
</html>