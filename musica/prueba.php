<!-- posibles formas de solucionar el problema:
(1) mirar una posible jerarquia de colores, sino, establecer una.
(!) no fijarse en lo de las areas, es inutil dado que queremos encerrar algo
con una forma especifica 
(!) mas que todo tratar de encontrar como desacerse de lo transparente, del espacio que ocupa
-->
<?php
if($_POST){
  print('holaaa');
}

$checkSvg ='<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
<path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z"/>
</svg>';

$hola = '';
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: Top;
      height: 500vh;
      margin: 0px;
    }

    .contenedor {
      align-items: center;
      position: relative;
      width: 500px; /* Ancho del círculo */
      height: 500px; /* Altura del círculo */
      border-radius: 50%; /* Hace que el contenedor sea un círculo */
      border: 2px solid #000;
      overflow:hidden;
      transform: rotate(15deg); /* Rotar el círculo 15 grados hacia la derecha */
      margin-top: 20px;
    }

    .inner-circle {
      position:absolute;
      width: 250px;
      height: 250px;
      background-color: lightblue;
      border: 2px solid black;
      border-radius: 50%;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      z-index: 2;
      overflow: hidden;
    }

    .boton-triangulo,
    .boton-triangulo-dos,
    .boton-triangulo-tres,    
    .boton-triangulo-cuatro,
    .triangulo-rectangulo, 
    .triangulo-rectangulo-dos,
    .triangulo-rectangulo-tres,
    .triangulo-rectangulo-cuatro,
    .boton-triangulo-cinco,
    .triangulo-rectangulo-cinco,
    .boton-triangulo-seis,
    .triangulo-rectangulo-seis,
    .boton-triangulo-siete,
    .triangulo-rectangulo-siete,
    .boton-triangulo-ocho,
    .triangulo-rectangulo-ocho,
    .boton-triangulo-nueve,
    .triangulo-rectangulo-nueve,
    .boton-triangulo-diez,
    .triangulo-rectangulo-diez,
    .boton-triangulo-once,
    .triangulo-rectangulo-once,
    .boton-triangulo-doce,
    .triangulo-rectangulo-doce {
      width: 0;
      height: 0; 
      border-style: solid;
      background-color: transparent;
      cursor: pointer; 
      outline: none;
      z-index: 1;
    }

    .boton-triangulo {
      position: absolute;
      top: 50%;
      left: 50%;
      border-width: 250px 145px 0px;
      border-color: #3498db #3498db #3498db #3498db;
      clip-path: polygon(0% 0%, 100% 210%, 0% 100%);
    }

    .triangulo-rectangulo {
      position:absolute;
      width: 0;
      height: 0;
      top: 50%;
      left: 50%;
      border-left: 72.25px solid #808000;
      border-top: 125px solid transparent;
      clip-path: polygon(1% 0%, 190% 210%, 0% 100%);
    }

    .boton-triangulo-dos {
        position: absolute;
        top: 32%;
        left: 59%;
        transform: translate(0%, 0%) rotate(-30deg);
        border-width: 250px 145px 0px;
        border-color: #CD5C5C #CD5C5C #CD5C5C #CD5C5C;
        clip-path: polygon(0% 0%, 100% 210%, 0% 100%);
    }

    .triangulo-rectangulo-dos {
        position: absolute;
        top: 38%;
        left: 60%;
        transform: translate(0%, 0%) rotate(-30deg);
        border-left: 72.25px solid #008080;
        border-top: 125px solid transparent;
        clip-path: polygon(1% 0%, 190% 210%, 0% 100%);
    }

    .boton-triangulo-tres {
      position: absolute;
      width: 0;
      height: 0;
      top: 11%;
      left: 56.55%;
      transform: translate(0%, 0%) rotate(-60deg);
      border-width: 250px 145px 0px;
      border-color: #00FF00 #00FF00 #00FF00 #00FF00;
      clip-path: polygon(0% 0%, 100% 210%, 0% 100%);
    }
    /* transparent */
    .triangulo-rectangulo-tres {
        position: absolute;
        top: 23.50%;
        left: 66%;
        transform: translate(0%, 0%) rotate(-60deg);
        border-left: 72.25px solid #008000;
        border-top: 125px solid  #008000;
        clip-path: polygon(1% 0%, 190% 210%, 0% 100%);
    }
    /* (0% 0%, 50% 50%, 0% 50%) */
    .boton-triangulo-cuatro {
      position: absolute;
      top: -5.50%;
      left: 45%;
      transform: translate(0%, 0%) rotate(-90deg);
      border-width: 250px 145px 0px;
      border-color:  #00FFFF #00FFFF #00FFFF #00FFFF;
      clip-path: polygon(0% 0%, 100% 210%, 0% 100%);
    }


    .triangulo-rectangulo-cuatro {
        position: absolute;
        top: 7.50%;
        left: 59%;
        transform: translate(0%, 0%) rotate(-90deg);
        border-left: 72.25px solid #82E0AA;
        border-top: 125px solid transparent;
        clip-path: polygon(1% 0%, 190% 210%, 0% 100%);
    }


    .boton-triangulo-cinco {
      position: absolute;
      top: -14.50%;
      left: 27.50%;
      transform: translate(0%, 0%) rotate(-120deg);
      border-width: 250px 145px 0px;
      border-color: #F1C40F #F1C40F #F1C40F #F1C40F; 
      clip-path: polygon(0% 0%, 100% 210%, 0% 100%);
    }


    .triangulo-rectangulo-cinco {
        position: absolute;
        top: -2%;
        left: 47%;
        transform: translate(0%, 0%) rotate(-120deg);
        border-left: 72.25px solid #7D3C98;
        border-top: 125px solid transparent;
        clip-path: polygon(1% 0%, 190% 210%, 0% 100%);
    }


    .boton-triangulo-seis {
      position: absolute;
      top: -11.50%;
      left: 6.50%;
      border-width: 250px 145px 0px;
      transform: translate(0%, 0%) rotate(-150deg);
      border-color: #3498db #3498db #3498db #3498db;
      clip-path: polygon(0% 0%, 100% 210%, 0% 100%);
    }

    .triangulo-rectangulo-seis {
        position: absolute;
        top: -5%;
        left: 31%;
        transform: translate(0%, 0%) rotate(-150deg);
        border-left: 72.25px solid #0E6655;
        border-top: 125px solid transparent;
        clip-path: polygon(1% 0%, 190% 210%, 0% 100%);
    }
    
    .boton-triangulo-siete {
      position: absolute;
      top: 0%;
      left: -10%;
      border-width: 250px 145px 0px;
      transform: translate(0%, 0%) rotate(-180deg);
      border-color: transparent transparent transparent #BFC9CA;
      clip-path: polygon(0% 0%, 100% 210%, 0% 100%);
    }


    .triangulo-rectangulo-siete {
        position: absolute;
        top: 0%;
        left: 16.50%;
        transform: translate(0%, 0%) rotate(-180deg);
        border-left: 72.25px solid #BFC9CA;
        border-top: 125px solid transparent;
        clip-path: polygon(1% 0%, 190% 210%, 0% 100%);
    }


    .boton-triangulo-ocho {
      position: absolute;
      top: 18.50%;
      left: -18.50%;
      border-width: 250px 145px 0px;
      transform: translate(0%, 0%) rotate(-210deg);
      border-color: transparent transparent transparent #641E16;
      clip-path: polygon(0% 0%, 100% 210%, 0% 100%);
    }


    .triangulo-rectangulo-ocho {
        position: absolute;
        top: 10%;
        left: 5%;
        transform: translate(0%, 0%) rotate(-210deg);
        border-left: 72.25px solid #641E16;
        border-top: 125px solid transparent;
        clip-path: polygon(1% 0%, 190% 210%, 0% 100%);
    }

    .boton-triangulo-nueve {
      position: absolute;
      top: 38.50%;
      left: -16.50%;
      border-width: 250px 145px 0px;
      transform: translate(0%, 0%) rotate(-240deg);
      border-color: transparent transparent transparent #F39C12;
      clip-path: polygon(0% 0%, 100% 210%, 0% 100%);
    }

    .triangulo-rectangulo-nueve {
        position: absolute;
        top: 27%;
        left: 2%;
        transform: translate(0%, 0%) rotate(-240deg);
        border-left: 72.25px solid #F39C12;
        border-top: 125px solid transparent;
        clip-path: polygon(1% 0%, 190% 210%, 0% 100%);
    }



    .boton-triangulo-diez {
      position: absolute;
      top: 55%;
      left: -5%;
      border-width: 250px 145px 0px;
      transform: translate(0%, 0%) rotate(-270deg);
      border-color: transparent transparent transparent #2C3E50;
      clip-path: polygon(0% 0%, 100% 210%, 0% 100%);
    }

    
    .triangulo-rectangulo-diez {
        position: absolute;
        top: 42%;
        left: 8%;
        transform: translate(0%, 0%) rotate(-270deg);
        border-left: 72.25px solid #2C3E50;
        border-top: 125px solid transparent;
        clip-path: polygon(1% 0%, 190% 210%, 0% 100%);
    }

    .boton-triangulo-once {
      position: absolute;
      top: 63.50%;
      left: 13.50%;
      border-width: 250px 145px 0px;
      transform: translate(0%, 0%) rotate(-300deg);
      border-color: transparent transparent transparent #0B5345;
      clip-path: polygon(0% 0%, 100% 210%, 0% 100%);
    }

    .triangulo-rectangulo-once {
        position: absolute;
        top: 51%;
        left: 20%;
        transform: translate(0%, 0%) rotate(-300deg);
        border-left: 72.25px solid #0B5345;
        border-top: 125px solid transparent;
        clip-path: polygon(1% 0%, 190% 210%, 0% 100%);
    }

    .boton-triangulo-doce {
      position: absolute;
      top: 62%;
      left: 33.50%;
      border-width: 250px 145px 0px;
      transform: translate(0%, 0%) rotate(-330deg);
      border-color: #AF601A #AF601A #AF601A #AF601A;
      clip-path: polygon(0% 0%, 100% 210%, 0% 100%);

    }

    .triangulo-rectangulo-doce {
        position: absolute;
        top: 55.50%;
        left: 35%;
        transform: translate(0%, 0%) rotate(-330deg);
        border-left: 72.25px solid #AF601A;
        border-top: 125px solid transparent;
        clip-path: polygon(1% 0%, 190% 210%, 0% 100%);
    }
    /* Rotar cada línea según su posición en el círculo */
    .line:nth-child(1) { transform: rotate(0deg); }
    .line:nth-child(2) { transform: rotate(30deg); } 
    .line:nth-child(3) { transform: rotate(60deg); }
    .line:nth-child(4) { transform: rotate(90deg); }
    .line:nth-child(5) { transform: rotate(120deg); }
    .line:nth-child(6) { transform: rotate(150deg); }
    .line:nth-child(7) { transform: rotate(180deg); }
    .line:nth-child(8) { transform: rotate(210deg); }
    .line:nth-child(9) { transform: rotate(240deg); }
    .line:nth-child(10) { transform: rotate(270deg); }
    .line:nth-child(11) { transform: rotate(300deg); }
    .line:nth-child(12) { transform: rotate(330deg); }

    .line {
        position: absolute;
        width: 2px; 
        height: 250px; 
        background-color: #121213;
        left: 50%;
        top: 50%;
        transform: translateX(-50%) translateY(-100%);
        transform-origin: top;
        z-index: 3;
        pointer-events: none
    }

    .lines {
        position: relative;
        width: 100%;
        height: 100%;
    }

    .lines-container {
        position: relative;
        width: 100%;
        height: 100%;
    }

    
  </style>
  <title>Botón Triángulo</title>
</head>
<body>
  <div class="contenedor">
    <div class="inner-circle">
        <button class="triangulo-rectangulo" onclick="escribirTexto('D#m')"></button>
        <button class="triangulo-rectangulo-dos" onclick="escribirTexto('G#m')"></button>
        <button class="triangulo-rectangulo-tres" onclick="escribirTexto('C#m')"></button>
        <button class="triangulo-rectangulo-cuatro" onclick="escribirTexto('F#m')"></button>
        <button class="triangulo-rectangulo-cinco" onclick="escribirTexto('Bm')"></button>
        <button class="triangulo-rectangulo-seis" onclick="escribirTexto('E')"></button>
        <button class="triangulo-rectangulo-siete" onclick="escribirTexto('A')"></button>
        <button class="triangulo-rectangulo-ocho" onclick="escribirTexto('Dm')"></button>
        <button class="triangulo-rectangulo-nueve" onclick="escribirTexto('Gm')"></button>
        <button class="triangulo-rectangulo-diez" onclick="escribirTexto('cm')"></button>
        <button class="triangulo-rectangulo-once" onclick="escribirTexto('fm')"></button>
        <button class="triangulo-rectangulo-doce" onclick="escribirTexto('Bbm')"></button>        
    </div>

    <button class="boton-triangulo" onclick="escribirTexto('F#M')"></button>
    <button class="boton-triangulo-dos" onclick="escribirTexto('BM')"></button>
    <button class="boton-triangulo-tres" onclick="escribirTexto('E')"></button>
    <button class="boton-triangulo-cuatro" onclick="escribirTexto('A')"></button>
    <button class="boton-triangulo-cinco" onclick="escribirTexto('D')"></button>
    <button class="boton-triangulo-seis" onclick="escribirTexto('G')"></button>
    <button class="boton-triangulo-siete" onclick="escribirTexto('C')"></button>
    <button class="boton-triangulo-ocho" onclick="escribirTexto('F')"></button>
    <button class="boton-triangulo-nueve" onclick="escribirTexto('BbM')"></button>
    <button class="boton-triangulo-diez" onclick="escribirTexto('EbM')"></button>
    <button class="boton-triangulo-once" onclick="escribirTexto('AbM')"></button>
    <button class="boton-triangulo-doce" onclick="escribirTexto('C#M')"></button>
    

    <div class="lines-container">
        <div class="lines">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>      
    </div>
    
  </div>


  <div  class="respuestas" style="margin: 200px; display: flex; flex-direction: column;"> 
    
  <form id="cuestionario">
    F#: <br><br>
    <label for="pregunta1">1. Introduce el sexto grado:</label> 
    <input type="text" id="pregunta1" name="pregunta1" > <button type="button" onclick="verificarRespuestas()">Verificar respuestas</button> <br><br>
    
    <label for="pregunta2">2. Introduce cuarto grado:</label>
    <input type="text" id="pregunta2" name="pregunta2"> <button type="button" onclick="verificarRespuestas()">Verificar respuestas</button> <br><br>
    
    <label for="pregunta3">3. Introduce el quinto grado:</label>
    <input type="text" id="pregunta3" name="pregunta3"><br><br> <button type="button" onclick="verificarRespuestas()">Verificar respuestas</button>

    
</form>


<div id="resultado">
    <?php echo isset($checkSvg) ? '<span id="svgContainer" style="display: none;">' . $checkSvg . '</span>' : ''; ?>
    <?php echo isset($checkSvg) ? '<span id="svgContainer2" style="display: none;">' . $checkSvg . '</span>' : ''; ?>

    <?php echo isset($checkSvg) ? '<span id="svgContainer3" style="display: none;">' . $checkSvg . '</span>' : ''; ?>
</div>

<script>

    var inputActual = 1; // Variable para rastrear el input actual

    function escribirTexto(texto) {
        var inputActualId = 'pregunta' + inputActual;
        var inputActualElement = document.getElementById(inputActualId);

        // Verificar si el valor actual del input es incorrecto
        if (inputActualElement.value.trim() === '') {
            inputActualElement.value = texto; // Asignar el texto al input actual
            inputActual++; // Pasar al siguiente input
        } else {
            // El valor del input actual es correcto, pasa al siguiente input
            inputActual++;
            escribirTexto(texto);
        }
    }

    function verificarRespuestas() {
        var respuesta1 = document.getElementById('pregunta1').value;
        var respuesta2 = document.getElementById('pregunta2').value;
        var respuesta3 = document.getElementById('pregunta3').value;

        if (respuesta1 === 'D#m') {
          svgContainer.style.display = 'inline-block';
        } else {
            console.log('Respuesta 1 incorrecta');
        }

        if (respuesta2 === 'BM') {
          svgContainer2.style.display = 'inline-block';
        } else {
            console.log('Respuesta 2 incorrecta');
        }

        if (respuesta3 === 'C#M') {
          svgContainer3.style.display = 'inline-block';
        } else {
            console.log('Respuesta 3 incorrecta');
        }
    }
</script>
</div>
</body>
</html>