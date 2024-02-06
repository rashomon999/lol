<?php

//recomendacion, abajo de cada li incrustar el php del POST
$texto1="";
$texto2="";
$envio="";

$contador=0;
$contador2=0;

$olvido2='';



$dibujo='<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="gold" class="bi bi-trophy" viewBox="0 0 16 16">
<path d="M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5c0 .538-.012 1.05-.034 1.536a3 3 0 1 1-1.133 5.89c-.79 1.865-1.878 2.777-2.833 3.011v2.173l1.425.356c.194.048.377.135.537.255L13.3 15.1a.5.5 0 0 1-.3.9H3a.5.5 0 0 1-.3-.9l1.838-1.379c.16-.12.343-.207.537-.255L6.5 13.11v-2.173c-.955-.234-2.043-1.146-2.833-3.012a3 3 0 1 1-1.132-5.89A33.076 33.076 0 0 1 2.5.5m.099 2.54a2 2 0 0 0 .72 3.935c-.333-1.05-.588-2.346-.72-3.935zm10.083 3.935a2 2 0 0 0 .72-3.935c-.133 1.59-.388 2.885-.72 3.935M3.504 1c.007.517.026 1.006.056 1.469.13 2.028.457 3.546.87 4.667C5.294 9.48 6.484 10 7 10a.5.5 0 0 1 .5.5v2.61a1 1 0 0 1-.757.97l-1.426.356a.5.5 0 0 0-.179.085L4.5 15h7l-.638-.479a.501.501 0 0 0-.18-.085l-1.425-.356a1 1 0 0 1-.757-.97V10.5A.5.5 0 0 1 9 10c.516 0 1.706-.52 2.57-2.864.413-1.12.74-2.64.87-4.667.03-.463.049-.952.056-1.469H3.504z"/>
</svg>';

$checkSvg = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="blue" class="bi bi-check-lg" viewBox="0 0 16 16">
<path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022"/>
</svg>';

$cancel='<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-x-lg" viewBox="0 0 16 16">
<path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"/>
</svg>';

if($_POST){





$numero = isset($_POST["continuacion"])?$_POST["continuacion"]:[];
$igual = in_array("x <sup>3</sup>+6x <sup>2</sup>+12x+8", $numero)?"opcion correcta":"opcion incorrecta";





$numero1 = isset($_POST["continuacion1"])?$_POST["continuacion1"]:[];
$igual1 = in_array("(2x+5)(2x-5)", $numero1)?"opcion correcta":"opcion incorrecta";

$olvido1 = isset($_POST["olvido"])?$_POST["olvido"]:'';
if ($olvido1 === 'x <sup>-1/2</sup> (3x<sup>2</sup> -9x +6)'){
    $olvido2 = 'correcto';
}else if($olvido1 === ''){
    $olvido2 = '';
}else{
    $olvido2 = 'incorrecto';
}
    




$texto1= isset($_POST['numero1'])?$_POST['numero1']:"";
$texto2= isset($_POST['numero2'])?$_POST['numero2']:"";

$envio= isset($_POST['caja'])?$_POST['caja']:"";
if($envio === '?'){
    $servi='';
}else if($envio ===''){
    $servi='';
}else if($envio === '2'){
    $servi='correto';
}else{
    $servi='incorrecto';
}


$resultado1= isset($texto1)&&$texto1=="+8"?"campo 1 correcto":"campo 1 incorrecto";
$resultado2= isset($texto2)&&$texto2=="-3"?"campo 2 correcto":"campo 2 incorrecto";

//////////////////////////////////////////////
$question = isset($_POST['question']) ? $_POST['question'] : "";
if($question === '?'){
    $signo='';
}else if($question ===''){
    $signo='';
}else if($question === '2x'){
    $signo='correto';
}else{
    $signo='incorrecto';
}
// $signo = ($question == "2x") ? "correcto" : ($question===''?'':"incorrecto");

////////////////////////////////////////////////

$select=isset($_POST['name'])?$_POST['name']:'';
$select1= $select=="division sintetica"?"correcto":"incorrecto";

$independiente = isset($_POST['independiente']) ? $_POST['independiente'] : '';
$independiente1 = $independiente === '' ? '' : ($independiente == "12" ? "correcto" : "incorrecto");

$dependiente=isset($_POST['dependiente'])?$_POST['dependiente']:'';
$dependiente1= $dependiente === '' ? '' :($dependiente=="1"?"correcto":"incorrecto");

$select3=isset($_POST['name'])?$_POST['name']:'';
$select2= $select3==='division sintetica'?'correcto':'incorrecto';

$select=isset($_POST['ceros'])?$_POST['ceros']:'';
$select1= $select === ''?'':($select=="independiente/dependiente"?"correcto":"incorrecto");



$fraccion1=isset($_POST['fraccion1'])?$_POST['fraccion1']:'';
$fraccion1_2=isset($_POST['fraccion1_2'])?$_POST['fraccion1_2']:'';


$vefraccion1= $fraccion1 === ''?'':($fraccion1==1?"correcto":"incorrecto");
$vefraccion1_2= $fraccion1_2 === ''?'':($fraccion1_2==1?"correcto":"incorrecto");

$fraccion2=isset($_POST['fraccion2'])?$_POST['fraccion2']:'';
$fraccion2_2=isset($_POST['fraccion2_2'])?$_POST['fraccion2_2']:'';

$vefraccion2= $fraccion2 === ''?'':($fraccion2==2?"correcto":"incorrecto");
$vefraccion2_2= $fraccion2_2 === ''?'':($fraccion2_2==1?"correcto":"incorrecto");

$fraccion3=isset($_POST['fraccion3'])?$_POST['fraccion3']:'';
$fraccion3_2=isset($_POST['fraccion3_2'])?$_POST['fraccion3_2']:'';

$vefraccion3= $fraccion3 === ''?'':($fraccion3==3?"correcto":"incorrecto");
$vefraccion3_2= $fraccion3_2=== ''?'':($fraccion3_2==1?"correcto":"incorrecto");

$fraccion4=isset($_POST['fraccion4'])?$_POST['fraccion4']:'';
$fraccion4_2=isset($_POST['fraccion4_2'])?$_POST['fraccion4_2']:'';

$vefraccion4=$fraccion4 === ''?'':($fraccion4==4?"correcto":"incorrecto");
$vefraccion4_2= $fraccion4_2=== ''?'':($fraccion4_2==1?"correcto":"incorrecto");

$fraccion5=isset($_POST['fraccion5'])?$_POST['fraccion5']:'';
$fraccion5_2=isset($_POST['fraccion5_2'])?$_POST['fraccion5_2']:'';

$vefraccion5= $fraccion5 === ''?'':($fraccion5==6?"correcto":"incorrecto");
$vefraccion5_2= $fraccion5_2=== ''?'':($fraccion5_2==1?"correcto":"incorrecto");

$fraccion6=isset($_POST['fraccion6'])?$_POST['fraccion6']:'';
$fraccion6_2=isset($_POST['fraccion6_2'])?$_POST['fraccion6_2']:'';

$vefraccion6= $fraccion6 === ''?'':($fraccion6==12?"correcto":"incorrecto");
$vefraccion6_2= $fraccion6_2 === ''?'':($fraccion6_2==1?"correcto":"incorrecto");

$si= isset($_POST['si'])?$_POST['si']:'';
$no= $si===''?'':($si==='si'?"correcto":"incorrecto");

$div1= isset($_POST['div1'])?$_POST['div1']:'';
if ($div1 === '1') {
    $vediv1 = $checkSvg;
    $contador++;
}
// $vediv1 = $div1 === ''?'':($div1 === '1'?($checkSvg && $contador++):$cancel); 

$div2 = isset($_POST['div2'])?$_POST['div2']:'';
// $vediv2 = $div2 === ''?'':($div2 === '-3'?$checkSvg:$cancel);
if ($div2 === '-3') {
    $vediv2 = $checkSvg;
    $contador++;
}

$div3 = isset($_POST['div3'])?$_POST['div3']:'';
// $vediv3 = $div3 === ''?'':($div3 === '-4'?$checkSvg:$cancel);
if ($div3 === '-4') {
    $vediv3 = $checkSvg;
    $contador++;
}

$div4 = isset($_POST['div4'])?$_POST['div4']:'';
// $vediv4 = $div4 === ''?'':($div4 === '12'?$checkSvg:$cancel);
if ($div4 === '12') {
    $vediv4 = $checkSvg;
    $contador++;
}

$div5 = isset($_POST['div5'])?$_POST['div5']:'';
// $vediv5 = $div5 === ''?'':($div5 === '2'?$checkSvg:$cancel);
if ($div5 === '2') {
    $vediv5 = $checkSvg;
    $contador++;
}

$div6 = isset($_POST['div6'])?$_POST['div6']:'';
// $vediv6 = $div6 === ''?'':($div6 === '2'?$checkSvg:$cancel);
if ($div6 === '2') {
    $vediv6 = $checkSvg;
    $contador++;
}

$div7 = isset($_POST['div7'])?$_POST['div7']:'';
// $vediv7 = $div7 === ''?'':($div7 === '-2'?$checkSvg:$cancel);
if ($div7 === '-2') {
    $vediv7 = $checkSvg;
    $contador++;
}


$div8 = isset($_POST['div8'])?$_POST['div8']:'';
// $vediv8 = $div8 === ''?'':($div8 === '-12'?$checkSvg:$cancel);
if ($div8 === '-12') {
    $vediv8 = $checkSvg;
    $contador++;
}

$div9 = isset($_POST['div9'])?$_POST['div9']:'';
// $vediv9 = $div9 === ''?'':($div9 === '1'?$checkSvg:$cancel);
if ($div9 === '1') {
    $vediv9 = $checkSvg;
    $contador++;
}

$div10 = isset($_POST['div10'])?$_POST['div10']:'';
// $vediv10 = $div10 === ''?'':($div10 === '-1'?$checkSvg:$cancel);
if ($div10 === '-1') {
    $vediv10 = $checkSvg;
    $contador++;
}

$div11 = isset($_POST['div11'])?$_POST['div11']:'';
// $vediv11 = $div11 === ''?'':($div11 === '-6'?$checkSvg:$cancel);
if ($div11 === '-6') {
    $vediv11 = $checkSvg;
    $contador++;
}

$div12 = isset($_POST['div12'])?$_POST['div12']:'';
// $vediv12 = $div12 === ''?'':($div12 === '0'?$checkSvg:$cancel);
if ($div12 === '0') {
    $vediv12 = $checkSvg;
    $contador++;
}


}





$fact1 = isset($_POST['fact1'])?$_POST['fact1']:'';
if ($fact1 === 'x'){
    $vefact1 = $checkSvg;
    $contador3++;
}else if ($fact1===''){
    $vefact1 = '';
}else{
    $vefact1=$cancel;
}


$fact2 = isset($_POST['fact2'])?$_POST['fact2']:'';
if ($fact2 === '2'){
    $vefact2 = $checkSvg;
    $contador3++;
}else if ($fact2===''){
    $vefact2 = '';
}else{
    $vefact2=$cancel;
}

$fact3 = isset($_POST['fact3'])?$_POST['fact3']:'';
if ($fact3 === 'x'){
    $vefact3 = $checkSvg;
    $contador3++;
}else if ($fact3===''){
    $vefact3 = '';
}else{
    $vefact3=$cancel;
}

$fact4 = isset($_POST['fact4'])?$_POST['fact4']:'';
if ($fact4 === 'x'){
    $vefact4 = $checkSvg;
    $contador3++;
}else if ($fact4===''){
    $vefact4 = '';
}else{
    $vefact4=$cancel;
}

$fact5 = isset($_POST['fact5'])?$_POST['fact5']:'';
if ($fact5 === '6'){
    $vefact5 = $checkSvg;
    $contador3++;
}else if ($fact5===''){
    $vefact5 = '';
}else{
    $vefact5=$cancel;
}





// echo "Valor de \$vese1_2: $vese1_2";

$se1 = isset($_POST['sumres1'])?$_POST['sumres1']:'';
if ($se1 === 'resta'){
    $vese1 = $checkSvg;
    $contador3++;
    $vese1_2 = '-';
}else if ($se1 ===''){
    $se1='';
    // $vese1 = '';
    // $vese1_2='';
}else{
    $vese1=$cancel;
    // $vese1_2 = '';
}

$definitivo1=  isset($vese1_2) ? $vese1_2: 'Select';

$se2 = isset($_POST['sumres2'])?$_POST['sumres2']:'';
if ($se2 === 'resta'){
    $vese2 = $checkSvg;
    $contador3++;
    $vese2_2 = '-';
}else if ($se2===''){
    // $vese2 = '';
    // $vese2_2 = '';
}
else{
    $vese2=$cancel;
    // $vese1_2 = '';
}

$definitivo2=  isset($vese2_2) ? $vese2_2: 'Select';

$se3 = isset($_POST['sumres3'])?$_POST['sumres3']:'';
if ($se3 === 'resta'){
    $vese3 = $checkSvg;
    $contador3++;
    $vese3_2 = '-';
}else if ($se3===''){
    $vese3 = '';
    // $vese3_2 = '';
}else{
    $vese3=$cancel;
    // $vese3_2 = '';
}
$definitivo3=  isset($vese3_2) ? $vese3_2: 'Select';



////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////
$elemento1 = isset($_POST['elemento1'])?$_POST['elemento1']:'';
if ($elemento1 === 'x'){
    $veelemento1 = $checkSvg;
    $contador2++;
}else if ($elemento1===''){
    $veelemento1 = '';
}else{
    $veelemento1=$cancel;
}

$elemento2 = isset($_POST['elemento2'])?$_POST['elemento2']:'';
if ($elemento2 === '2'){
    $veelemento2 = $checkSvg;
    $contador2++;
}else if ($elemento2===''){
    $veelemento2 = '';
}else{
    $veelemento2=$cancel;
}

$elemento3 = isset($_POST['elemento3'])?$_POST['elemento3']:'';
if ($elemento3 === 'x'){
    $veelemento3 = $checkSvg;
    $contador2++;
}else if ($elemento3===''){
    $veelemento3 = '';
}else{
    $veelemento3=$cancel;
}

$elemento4 = isset($_POST['elemento4'])?$_POST['elemento4']:'';
if ($elemento4 === '3'){
    $veelemento4 = $checkSvg;
    $contador2++;
}else if ($elemento4===''){
    $veelemento4 = '';
}else{
    $veelemento4=$cancel;
}

$elemento5 = isset($_POST['elemento5'])?$_POST['elemento5']:'';
if ($elemento5 === 'x'){
    $veelemento5 = $checkSvg;
    $contador2++;
}else if ($elemento5===''){
    $veelemento5 = '';
}else{
    $veelemento5=$cancel;
}

$elemento6 = isset($_POST['elemento6'])?$_POST['elemento6']:'';
if ($elemento6 === '2'){
    $veelemento6 = $checkSvg;
    $contador2++;
}else if ($elemento6===''){
    $veelemento6 = '';
}else{
    $veelemento6=$cancel;
}



// echo "Valor de \$vese1_2: $vese1_2";

$termino1 = isset($_POST['termino'])?$_POST['termino']:'';
if ($termino1 === 'resta'){
    $vetermino1 = $checkSvg;
    $contador2++;
    $termino1_2 = '-';
}else if ($termino1 ===''){
    $termino1='';
    // $vese1 = '';
    // $vese1_2='';
}else{
    $vetermino1=$cancel;
    // $vese1_2 = '';
}

$destino1=  isset($termino1_2) ? $termino1_2: 'Select';

$termino2 = isset($_POST['termino2'])?$_POST['termino2']:'';
if ($termino2 === 'resta'){
    $vetermino2 = $checkSvg;
    $contador2++;
    $vetermino2_2 = '-';
}else if ($termino2===''){
    $vetermino2='';
    // $vese2_2 = '';
}
else{
    $vetermino2=$cancel;
    // $vese1_2 = '';
}

$destino2=  isset($vetermino2_2) ? $vetermino2_2: 'Select';

$termino3 = isset($_POST['termino3'])?$_POST['termino3']:'';
if ($termino3 === 'suma'){
    $vetermino3 = $checkSvg;
    $contador2++;
    $vetermino3_2 = '+';
}else if ($termino3===''){
    $vetermino3 = '';
    // $vese3_2 = '';
}else{
    $vetermino3=$cancel;
    // $vese3_2 = '';
}
$destino3=  isset($vetermino3_2) ? $vetermino3_2: 'Select';







$cubo1 = isset($_POST['cubo1'])?$_POST['cubo1']:'';
$vecubo1 = $cubo1===''?'':($cubo1 === 'x(x+3)(x<sup>2</sup>-3x+9)'?'correcto':'incorrecto');

// $cubo2 = $_POST['cubo2']?$_POST['cubo2']:'';
// $vecubo2 = isset($cubo2)?'':($cubo2 === ''?'correcto':'incorrecto');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen Diagnostico</title>
    <link rel="stylesheet" href="style.css">
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
</head>
<body>
    <div class="contenedor">

        <div class="seccion izquierda">
            <br>
        <h1>Continuacion: Desarrolle y simplifique las siguientes expresiones</h1><br>
        <hr>
        <form action="nuevo.php" method="POST" onsubmit="handleSubmit(event)">
            <ul>
            <li class="mi-lista">Ejercicio 5: <br><br>
                    <img src="../img/Captura de pantalla 2023-12-23 095126.png" alt=""> <br><br>
                    <input type="radio" value="x <sup>3</sup>+4x<sup>2</sup>+10x+8" name="continuacion[]" id="">x <sup>3</sup>+4x<sup>2</sup>+10x+8
                    <input type="radio" value="x <sup>3</sup>+6x <sup>2</sup>+12x+8" name="continuacion[]" id="">x <sup>3</sup>+6x <sup>2</sup>+12x+8
                    <br><br>
                    <button class="btn btn-primary"type="submit">Submit</button>
                    <?php echo $_POST && !empty($numero)? $igual:"" ?>
                     <!-- Botón para abrir la imagen -->
                     <button  class="btn btn-info"onmousedown=mostrarImagen10() onmouseup=ocultaImagen10()>Ayuda</button>
                    
                    <img id="imagenMostrada10" src="../img/Productos notables-d180d4ea-6b60-44bf-94b4-19a9b2e49cc3-copia.webp" alt='' style="display: none; max-width: 50%">
                    <script>
                        function mostrarImagen10() {
                        var imagenMostrada = document.getElementById('imagenMostrada10');

                        // Mostrar la imagen
                        imagenMostrada.style.display = 'block';
                        }

                        function ocultarImagen10() {
                        var imagenMostrada = document.getElementById('imagenMostrada10');

                        // Ocultar la imagen al soltar el botón
                        imagenMostrada.style.display = 'none';
                         }
                    </script>
            </li>
            <br><br><br>
            <h2>Factorizar: </h2>
            <li class="mi-lista">Ejercicio 1: <br><br>
                    <img src="../img/Captura de pantalla 2023-12-23 101732.png" alt=""> <br><br>
                    <input type="radio" value="(2x+5)(2x+5)" name="continuacion1[]" id="">(2x+5)(2x+5)
                    <input type="radio" value="(2x+5)(2x-5)" name="continuacion1[]" id="">(2x+5)(2x-5)
                    <br><br>
                    <button class="btn btn-primary"type="submit">Submit</button>
                    <?php echo $_POST && !empty($numero1)? $igual1:"" ?><br><br><br>
                </li>

            <li class="mi-lista">Ejercicio 2: <br><br>
                    <img src="../img/Captura de pantalla 2023-12-23 110152.png" alt=""> <br><br>
                    ( 2x<input   type="text" value="<?php echo $texto1?>" name="numero1" id=""> ) (2x<input  type="text" name="numero2" value="<?php echo $texto2?>" id="">)
                    <br><br>

                    <button class="btn btn-primary"  type="submit">Submit</button>
                    <!--button -->
                    <button onmousedown="mostrarImagen2()" onmouseup="ocultarImagen2()">Ayuda</button>
                    <!-- Elemento para mostrar la imagen -->

                    <img id="imagenMostrada2" src="../img/Captura de pantalla 2024-01-23 094423.png" style="display: none; max-width: 100%">

                    <script>
                        function mostrarImagen2() {
                        var imagenMostrada2 = document.getElementById('imagenMostrada2');

                        // Mostrar la imagen
                        imagenMostrada2.style.display = 'block';
                        }

                        function ocultarImagen2() {
                        var imagenMostrada2 = document.getElementById('imagenMostrada2');

                        // Ocultar la imagen al soltar el botón
                        imagenMostrada2.style.display = 'none';
                         }
                        </script>

                    




                    <?php echo !empty($texto1)&&!empty($texto1)?$resultado1:""?>
                    <?php echo !empty($texto1) && !empty($texto2) ? $resultado2 : ""; ?><br><br>


                    <img src="../img/Captura de pantalla 2023-12-23 112952.png" alt=""><br><br>
                    <input type="text" name="caja" value="<?php echo $envio?>" id="" placeholder="?"><br><br>
                    <button type="submit"  class="btn btn-primary">Submit</button>
                    <?php echo !empty($envio)?$servi:"" ?> 
                    
                    <br><br><br>

                    <div class="division"  height="60px" >
                        <div style="text-align: center; " > 

                        (<input type="text"   class="custom-input" name="box1" id="" value="<?php echo isset($question)?$question:"?" ?>" placeholder="?"  style="width: 30px;" >
                        <?php echo !empty($resultado2)&&!empty($texto1)?$texto1:""?>)
                        
                        
                        (
                        <input type="text"   class="custom-input" name="box2" id="" value="<?php echo isset($question)?$question:"?" ?>" style="width: 30px;" placeholder="?" >
                        <?php echo !empty($resultado1) && !empty($texto2) ? $texto2 : ""; ?>) </div> 
                        </div>
                    
                        <div style="margin-left:130px; ">
                            (<?php echo !empty($servi)?$envio:"" ?>)
                        </div><br><br>

                    <div class="imagen">
                        <input type="text" value="<?php echo isset($question)?$question:""; ?>" name="question" id="">=
                        <img src="../img/descarga.jpg" alt="">
                    </div>

                    <button style="margin-left:10px" class="btn btn-primary" type="submit">Submit</button>
                    <?php echo !empty($signo)?$signo:""; ?> <br><br><br><br>

                </li>

            <li class="mi-lista">Ejercicio 3
                
                <div style="font-size:18px"><br>
                    
                            
                <h2 style="font-size:22px;">¿cual es la division por la que se sacan los ceros de un polinomio/ se factoriza? </h2>
                <select value="<?php isset($select2)?$select2:'' ?>" name="name" >
                    <option value="" selected disabled>Selecciona una opción</option>
                    <option value="division sintetica">division sintetica</option>
                    <option value="division de polinomios">division de polinomios</option>
                </select>
        
                <input type="submit" >
                <?php echo isset($select2)?$select2:''; ?><br><br>


                x<sup>3</sup>-3x<sup>2</sup>-4x+12= <br><br>

                            Indique el termino independiente
                <input type="text" name="independiente" id=""><br><br>
                <button class="btn btn-primary"type="submit" Value="Enviar">Enviar</button>
                <?php echo isset($independiente1)?$independiente1:""; ?>
                            <br><br>
                Indique el termino dependiente
                <input type="text" name="dependiente" id=""><br><br>
                <button class="btn btn-primary"type="submit" Value="Enviar">Enviar</button>
                <?php echo isset($dependiente1)?$dependiente1:""; ?>
                                <br><br>
                Es la division donde se sacan los posibles ceros:
                <br><br>

                <!-- $select=isset($_POST['ceros'])?$_POST['ceros']:'';
                $select1= $select === ''?'':($select=="independiente/dependiente"?"correcto":"incorrecto");-->


                <select name="ceros" >
                    <option value="" selected disabled>Selecciona una opción</option>
                    <option value="independiente/dependiente" <?php echo (isset($_POST['ceros']) && $_POST['ceros'] == 'independiente/dependiente') ? 'selected' : ''; ?>>independiente/dependiente</option>
                    <option value="dependiente/independiente" <?php echo (isset($_POST['ceros']) && $_POST['ceros'] == 'dependiente/independiente') ? 'selected' : ''; ?>>dependiente/independiente</option>
                </select>
                <input type="submit" >
                <?php echo isset($select1)?$select1:''; ?><br><br>

                indique los posibles ceros de menor a mayor (de izquierda a derecha):
                <br><br>
            <div class="line-container">
                <div class="line-container">
                    <div class="line-content">
                    <div class="line-text-top">
                        <input type="text"  name="fraccion1" id=""  size="5" value="<?php echo isset($fraccion1)?$fraccion1:''?>">
                    </div>
                    <hr>
                    <div class="line-text-bottom">
                        <input type="text" name="fraccion1_2" id="" size="5" value="<?php echo isset($fraccion1_2)?$fraccion1_2:''?>">
                    </div>
                    <button type="submit">Enviar</button><br><br>
                    <?php echo isset($vefraccion1)?$vefraccion1:'' ?><br>
                    <?php echo isset($vefraccion1_2)?$vefraccion1_2:'' ?>
                </div>


                <div class="line-content">
                    <div class="line-text-top">
                        <input type="text" name="fraccion2" size="5" value="<?php echo isset($fraccion2)?$fraccion2:''?>">
                    </div>
                    <hr>
                    <div class="line-text-bottom">
                            <input type="text" name="fraccion2_2" id="" size="5" value="<?php echo isset($fraccion2_2)?$fraccion2_2:''?>">
                    </div>
                    <button type="submit">Enviar</button><br><br>
                    <?php echo isset($vefraccion2)?$vefraccion2:'' ?><br>
                    <?php echo isset($vefraccion2_2)?$vefraccion2_2:'' ?>
                </div>


                <div class="line-content">
                    <div class="line-text-top">
                        <input type="text" name="fraccion3" id="" size="5" value="<?php echo isset($fraccion3)?$fraccion3:''?>">
                    </div>
                    <hr>
                    <div class="line-text-bottom">
                        <input type="text" name="fraccion3_2" id="" size="5" value="<?php echo isset($fraccion3_2)?$fraccion3_2:''?>">
                    </div>
                    <button type="submit">Enviar</button><br><br>
                    <?php echo isset($vefraccion3)?$vefraccion3:'' ?><br>
                    <?php echo isset($vefraccion3_2)?$vefraccion3_2:'' ?>
                </div>

                <div class="line-content">
                    <div class="line-text-top">
                        <input type="text" name="fraccion4" id="" size="5" value="<?php echo isset($fraccion4)?$fraccion4:''?>">
                    </div>
                    <hr>
                    <div class="line-text-bottom">
                        <input type="text" name="fraccion4_2" id="" size="5" value="<?php echo isset($fraccion4_2)?$fraccion4_2:''?>">
                    </div>
                    <button type="submit">Enviar</button><br><br>
                    <?php echo isset($vefraccion4)?$vefraccion4:'' ?><br>
                    <?php echo isset($vefraccion4_2)?$vefraccion4_2:'' ?>
                </div>

                <div class="line-content">
                    <div class="line-text-top">
                        <input type="text" name="fraccion5" id="" size="5" value="<?php echo isset($fraccion5)?$fraccion5:''?>">
                    </div>
                    <hr>
                    <div class="line-text-bottom">
                        <input type="text" name="fraccion5_2" id="" size="5" value="<?php echo isset($fraccion5_2)?$fraccion5_2:''?>">
                    </div>
                    <button type="submit">Enviar</button><br><br>
                    <?php echo isset($vefraccion5)?$vefraccion5:'' ?><br>
                    <?php echo isset($vefraccion5_2)?$vefraccion5_2:'' ?>
                </div>


                <div class="line-content">
                    <div  class="line-text-top">
                          <input type="text" name="fraccion6" id="" size="5" value="<?php echo isset($fraccion6)?$fraccion6:''?>">
                    </div>
                    <hr>
                    <div class="line-text-bottom">
                        <input type="text" name="fraccion6_2" id="" size="5" value="<?php echo isset($fraccion6_2)?$fraccion6_2:''?>">
                    </div>
                    <button type="submit">Enviar</button><br><br>
                    <?php echo isset($vefraccion6)?$vefraccion6:'' ?><br>
                    <?php echo isset($vefraccion6_2)?$vefraccion6_2:'' ?>
                </div>
                </div>
                    </div>
                <br><br>
                
                <div class="ultimo" >
                 Dos es un cero de x<sup>3</sup>-3x<sup>2</sup>-4x+12? <br>
                <select name="si" id="">
                    <option value="" selected disabled>Selecciona una opción</option>
                    <option value="no">no</option>
                    <option value="si">si</option>
                </select>
                <button type="submit">Enviar</button>
                <?php echo isset($no)?$no:''; ?>
                </div>

                </li>
                            

                

            </ul>
        </form>    
        </div>




        <div class="seccion derecha" >
                            <br><br>
            <h1 class="linea">Continuacion: Ejercicio Factorizar</h1><br><br>
                                        <hr>
            <form action="nuevo.php" method="POST"  onsubmit="handleSubmit(event)">
        <ul>
        <li class="mi-lista">
            justifique su anterior respuesta (¿Dos es un cero de x<sup>3</sup>-3x<sup>2</sup>-4x+12?): <br>
            <div class="verdadero"> 
                <div class="input-container">
                <input type="text" size="4" name="div1" value="<?php echo isset($div1)?$div1:'';?>"> <input type="text" size="4" name="div2" value="<?php echo isset($div2)?$div2:'';?>"> <input type="text"size="4" name="div3" value="<?php echo isset($div3)?$div3:'';?>"> <input type="text" size="4" name="div4" value="<?php echo isset($div4)?$div4:'';?>"> <input type="text" size="4" style="margin-left: 20px;" name="div5" value="<?php echo isset($div5)?$div5:'';?>">
                </div>
                
                <div class="new-input-container" style="padding-left: 69px; " >
                <input type="text" size="4" name="div6" value="<?php echo isset($div6)?$div6:'';?>"> <input type="text" size="4" name="div7" value="<?php echo isset($div7)?$div7:'';?>"> <input type="text" size="4" name="div8" value="<?php echo isset($div8)?$div8:'';?>">
                </div >
                <hr style="width=50%">

                <div class="input-container" style="margin=6px">
                <input type="text" size="4" name="div9" value="<?php echo isset($div9)?$div9:'';?>"> <input type="text" size="4" name="div10" value="<?php echo isset($div10)?$div10:'';?>"> <input type="text" size="4" name="div11" value="<?php echo isset($div11)?$div11:'';?>"> <input type="text" size="4" name="div12" value="<?php echo isset($div12)?$div12:'';?>"> 
                </div>
                <br>
                <button  type="submit" >Enviar</button>
                <?php echo isset($vediv1) ? $vediv1 : ''; ?>
                <?php echo isset($vediv2) ? $vediv2 : '';  ?>
                <?php echo isset($vediv3) ? $vediv3 : ''; ?>
                <?php echo isset($vediv4) ? $vediv4 : ''; ?>
                <?php echo isset($vediv5) ? $vediv5 : '';  ?>
                <?php echo isset($vediv6) ? $vediv6 : '';  ?>
                <?php echo isset($vediv7) ? $vediv7 : ''; ?>
                <?php echo isset($vediv8) ? $vediv8 : '';?>
                <?php echo isset($vediv9) ? $vediv9 : '';  ?>
                <?php echo isset($vediv10) ? $vediv10 : ''; ?>
                <?php echo isset($vediv11) ? $vediv11 : '';  ?>
                <?php echo isset($vediv12) ? $vediv12 : '';  ?>
                <?php echo $contador === 12 ? $dibujo : ''; ?>
            
            </div>
            </li>    
            <li class="mi-lista">
                Factorice en dos terminos:  x<sup>3</sup>-3x<sup>2</sup>-4x+12 <br><br> 
                
            <div class="cont">
                <div class="inputt-container">
                    <div class="parenthesis-container">
                        (<input type="text" size="4" name="fact1" value="<?php echo isset($fact1) ? $fact1 : ''; ?>">
                        <select name="sumres1" id="">
                            <option value="" <?php echo isset($vese1_2)?$vese1_2: 'selected ';?>><?php echo $definitivo1 ?></option>
                            <option value="suma" <?php echo ($se1 === 'suma') ? 'selected' : ''; ?>>+</option>
                            <option value="resta" <?php echo ($se1 === 'resta') ? 'selected' : ''; ?>>-</option>
                        </select>
                        <input type="text" size="4" name="fact2" value="<?php echo isset($fact2) ? $fact2 : ''; ?>">)
                     </div>
        
                    <div class="parenthesis-container">
                        (  <input type="text" size="4" name="fact3" value="<?php echo isset($fact3) ? $fact3 : ''; ?>"> <sup>2</sup>
                        
                        <select name="sumres2" id="">
                            <option value="" <?php echo isset($vese2_2)?$vese2_2: "selected ";?>><?php echo $definitivo2 ?></option>
                            <option value="suma" <?php echo ($se2 === 'suma') ? 'selected' : ''; ?>>+</option>
                            <option value="resta" <?php echo ($se2 === 'resta') ? 'selected' : ''; ?>>-</option>
                        </select>

                        <input type="text" size="4" name="fact4" value="<?php echo isset($fact4) ? $fact4 : ''; ?>">
                        
                        
                        <select name="sumres3"  id="">
                            
                            <option value="" <?php echo isset($vese3_2)?'': 'selected ';?>><?php echo $definitivo3 ?></option>
                            <option value="suma" <?php echo ($se3 === 'suma') ? 'selected' : ''; ?>>+</option>
                            <option value="resta" <?php echo ($se3 === 'resta') ? 'selected' : ''; ?>>-</option>
                        
                        </select>

                        <input type="text" size="4" name="fact5" value="<?php echo isset($fact5) ? $fact5 : ''; ?>">)
                    </div>
                </div>
            <br><br>

                    <div class="button-container">
                        <button type="submit">Submit</button>
                    </div>
                    <div style="display:flex">
                    <?php echo isset($vefact1)?$vefact1:''; ?>
                    <?php echo isset($vefact2)?$vefact2:''; ?>
                    <?php echo isset($vefact3)?$vefact3:''; ?>
                    <?php echo isset($vefact4)?$vefact4:''; ?>
                    <?php echo isset($vefact5)?$vefact5:''; ?>
                    <?php echo isset($vese1)?$vese1:''; ?>
                    <?php echo isset($vese2)?$vese2:''; ?>
                    <?php echo isset($vese3)?$vese3:''; ?>
                    <?php echo isset($contador3)? ($contador === 8 ? $dibujo : ''):''; ?>
                            
                    </div>
            </div>


            </li>
            <br><br>
            <li>Factorice en tres terminos el resultado anterior:
            <div class="contt">
                <div class="inputtt-container">
                    <div class="parenthesiss-container">
                        (<input type="text" size="4" name="elemento1" value="<?php echo isset($elemento1) ? $elemento1 : ''; ?>">
                        <select name="termino" id="">
                            <option value="" <?php echo isset($termino1_2)?'': 'selected ';?>><?php echo $destino1 ?></option>
                            <option value="suma" <?php echo ($termino1 === 'suma') ? 'selected' : ''; ?>>+</option>
                            <option value="resta" <?php echo ($termino1 === 'resta') ? 'selected' : ''; ?>>-</option>
                        </select>
                        <input type="text" size="4" name="elemento2" value="<?php echo isset($elemento2) ? $elemento2 : ''; ?>">)
                     </div>
                    

                     <div class="parenthesiss-container">
                        (<input type="text" size="4" name="elemento3" value="<?php echo isset($elemento3) ? $elemento3 : ''; ?>">
                        <select name="termino2" id="">
                            <option value="" <?php echo isset($termino2_2)?'': 'selected ';?>><?php echo $destino2 ?></option>
                            <option value="suma" <?php echo ($termino2 === 'suma') ? 'selected' : ''; ?>>+</option>
                            <option value="resta" <?php echo ($termino2 === 'resta') ? 'selected' : ''; ?>>-</option>
                        </select>
                        <input type="text" size="4" name="elemento4" value="<?php echo isset($elemento4) ? $elemento4 : ''; ?>">)
                     </div>


                     <div class="parenthesiss-container">
                        (<input type="text" size="4" name="elemento5" value="<?php echo isset($elemento5) ? $elemento5 : ''; ?>">
                        <select name="termino3" id="">
                            <option value="" <?php echo isset($termino3_2)?'': 'selected ';?>><?php echo $destino3 ?></option>
                            <option value="suma" <?php echo ($termino3 === 'suma') ? 'selected' : ''; ?>>+</option>
                            <option value="resta" <?php echo ($termino3 === 'resta') ? 'selected' : ''; ?>>-</option>
                        </select>
                        <input type="text" size="4" name="elemento6" value="<?php echo isset($elemento6) ? $elemento6 : ''; ?>">)
                     </div>
                <br><br><br>
                
        
                </div>
                <div class="buttton">
                        <button type="submit">Submit</button>
                        <?php echo isset($veelemento1)?$veelemento1:''; ?>
                        <?php echo isset($veelemento2)?$veelemento2:''; ?>
                        <?php echo isset($veelemento3)?$veelemento3:''; ?>
                        <?php echo isset($veelemento4)?$veelemento4:''; ?>
                        <?php echo isset($veelemento5)?$veelemento5:''; ?>
                        <?php echo isset($veelemento6)?$veelemento6:''; ?>
                        <?php echo isset($vetermino1) ? $vetermino1 : ''; ?>
                        <?php echo isset($vetermino2) ? $vetermino2 : ''; ?>
                        <?php echo isset($vetermino3) ? $vetermino3 : ''; ?>
                        <?php echo $contador2 === 9 ? $dibujo : ''; ?>
                </div>
                
                

            </div>
            </li>
            <br><br><br>
            <li> Ejercicio 4:
                <br><br>
                    <img src="../img/Captura de pantalla 2024-01-02 152711.png" alt=""><br><br>
                    <input type="radio" name="cubo1" value="3</sup>+27)" id=""> x(x<sup>3</sup>+27)
                    <input style="margin-left: 50px;" type="radio" name="cubo1" value="x(x+3)(x<sup>2</sup>-3x+9)" id="">x(x+3)(x<sup>2</sup>-3x+9)
                    <br><br>
                    <button class="btn btn-primary" type="submit">Submit</button>
                    <?php echo isset($vecubo1)?$vecubo1:''; ?>



                        <!-- -->
                    <button  class="btn btn-info"onmousedown=mostrarImagen() onmouseup=ocultaImagen()>Ayuda</button>
                    
                    <img id="imagenMostrada3" src="../img/Productos notables-d180d4ea-6b60-44bf-94b4-19a9b2e49cc3.webp" style="display: none; max-width: 50%">
                        <script>
                        function mostrarImagen() {
                        var imagenMostrada = document.getElementById('imagenMostrada3');

                        // Mostrar la imagen
                        imagenMostrada.style.display = 'block';
                        }

                        function ocultarImagen() {
                        var imagenMostrada = document.getElementById('imagenMostrada3');

                        // Ocultar la imagen al soltar el botón
                        imagenMostrada.style.display = 'none';
                         }
                        </script>
            </li>
            <br><br><br>
            <li>Ejercicio 5: <br><br>
                <img src="../img/Captura de pantalla 2024-01-26 181930.png" alt=""><br><br>
                <input type="radio" name="olvido" value="x <sup>-1/2</sup> (3x<sup>2</sup> -9x +6)" id="radio1" >x <sup>-1/2</sup> (3x<sup>2</sup> -9x +6)
                
                <input type="radio" name="olvido" value="x <sup>-1/2</sup> (3x<sup>2</sup> -9x<sup>1/4</sup> +6)" id="radio2">x <sup>-1/2</sup> (3x<sup>2</sup> -9x<sup>1/4</sup> +6)
                <br><br>
                <button class="btn btn-primary" type="submit">Submit</button>

                <?php print(isset($olvido2)?$olvido2:'') ?>
               


                <button onmouseup="ocultarImagen()" onmousedown="mostrarImagen()">Ayuda</button>

                    <!-- Elemento para mostrar la segunda imagen -->
                <img id="segundaImagenMostrada" src="../img/Captura de pantalla 2024-01-27 170750.png" style="display: none; max-width: 100%">
                <script>
                        function mostrarImagen() {
                        var imagenMostrada = document.getElementById('segundaImagenMostrada');

                        // Mostrar la imagen
                        imagenMostrada.style.display = 'block';
                        }

                        function ocultarImagen() {
                        var imagenMostrada = document.getElementById('segundaImagenMostrada');

                        // Ocultar la imagen al soltar el botón
                        imagenMostrada.style.display = 'none';
                        }
                </script>
                
            </li>


            <?php 
            
             $mujer = isset($_POST['mujer'])?$_POST['mujer']:'';
             
            if($mujer == ''){
                $mujer2 = '';
            }elseif($mujer === '3x<sup>-1/2</sup> (x<sup>2</sup> -3x +2)'){
                $mujer2 = 'correcto';
            }else{
                $mujer2 = 'incorrecto';
            }
            ?>
            
           
                
            <br><br>
            <li>Indique la siguiente factorizacion de: <br><br>
            
            <img src="../img/Captura de pantalla 2024-01-26 181930.png" alt=""><br><br>
            <input type="radio" value="3x <sup>-1/2</sup> (x<sup>2</sup> -3x<sup>1/4</sup> +2)" name="mujer" <?php echo (isset($mujer) && $mujer === '3x <sup>-1/2</sup> (x<sup>2</sup> -3x<sup>1/4</sup> +2)')?'checked': ''; ?>>3x <sup>-1/2</sup> (x<sup>2</sup> -3x<sup>1/4</sup> +2)

            <input type="radio" value="3x<sup>-1/2</sup> (x<sup>2</sup> -3x +2)" name="mujer" <?php      echo (isset($mujer) && $mujer === '3x<sup>-1/2</sup> (x<sup>2</sup> -3x +2)')?'checked': '';   ?>>3x <sup>-1/2</sup> (x<sup>2</sup> -3x +2)
                        <br><br>
                        
            <button type="submit" class="btn btn-primary" >Submit</button>
                  
            
            <?php print(isset($mujer2)?$mujer2:''); ?>      
                
        </li>
        
            
        <?php $mujer3 = isset($_POST['mujer2'])?$_POST['mujer2']:'';
                if($mujer3 === ''){
                    $mujer4 = '';
                }elseif($mujer3 === '3x<sup>-1/2</sup> (x-2) (x-1)'){
                    $mujer4 = 'correcto';
                }else{
                    $mujer4 = 'incorrecto';
                }
            ?>
             
         <br><br><br>   
        <li>
            
             Indique la ultima factorizacion de: <br><br>
            <img src="../img/Captura de pantalla 2024-01-26 181930.png" alt=""><br><br>
            basado en su repuesta anterior:
            <?php print(isset($mujer)?$mujer:'')?>
            <br><br>
            <input type="radio" name="mujer2" value="3x<sup>-1/4</sup> (x+2) (x-1)" id="" <?php echo (isset($mujer3) && $mujer3 === '3x<sup>-1/4</sup> (x+2) (x-1)')?'checked': ''; ?>>3x<sup>-1/4</sup> (x+2) (x-1)
            <input type="radio" value="3x<sup>-1/2</sup> (x-2) (x-1)" name="mujer2" id="" <?php echo (isset($mujer3) && $mujer3 === '3x<sup>-1/2</sup> (x-2) (x-1)')?'checked': ''; ?>>3x<sup>-1/2</sup> (x-2) (x-1)
            <br><br>
            <button type="submit" class="btn btn-primary">Submit</button>
        
        
            <?php print(isset($mujer4)?$mujer4:'');  ?>    
            <br><br>
            </li>
            <?php $equal1= isset($_POST['equal'])?$_POST['equal']:'';
            if($equal1 === 'si'){
                $equal2= 'correcto';
            }elseif($equal1 === ''){
                $equal2= '';
            }else{
                $equal2= 'incorrecto';
            }
            ?>
            <li>
                Es correcta esta simplificacion:
                 
                    <br><br>
                <div class="image-container" style="display:flex; align-items: center; margin: 0 10px;">
                    <img src="../img/Captura de pantalla 2024-01-27 225311.png" alt="">
                    
                    <span class="equal-sign" style="margin:10px; font-size: 24px;" >=</span>
                    
                    <img src="../img/Captura de pantalla 2024-01-27 225508.png" alt="">
                </div>
                

                <br><br>
                <input type="radio" value="si" name="equal" id="" <?php echo (isset($equal1) && $equal1 === 'si') ?'checked':''; ?>>Si
                
                <input type="radio" value="no" name="equal" id="">No
                <br><br>
                <button type="submit" class="btn btn-primary">Submit</button>

                <?php print isset($equal2)?$equal2:''; ?>
            <br><br><br>


            
            <?php $mujer30 = isset($_POST['mujer30'])?$_POST['mujer30']:''; ?>
            <?php if($mujer30 === ''){
                $mujer31= '';
            }elseif($mujer30 = 'Si'){
                $mujer31 = 'correcto';
            }else{
                $mujer31 = 'incorrecto';
            }
            ?>





            </li>
            <li>
    Es correcto:
    <br><br>
    <div class="clase" style="display:flex; align-items:center">
        <img src="../img/Captura de pantalla 2024-01-27 225508.png" alt="">
        <span class="equal-sign" style="margin:10px; font-size: 24px;">=</span>
        <img src="../img/Captura de pantalla 2024-01-27 232118.png" alt="">
        <div>
            <span style="margin:10px">
                <button type="submit" class="btn btn-primary">submit</button>
            </span>
            <span style="margin-left:10px" ><?php echo isset($mujer31) ? $mujer31 : ''; ?></span>
        </div>
    </div>
    <br>
    <input value="Si" type="radio" name="mujer30" <?php echo (isset($mujer30) && $mujer30 === 'Si') ? 'checked' : ''; ?>>Si
    <input value="No" type="radio" name="mujer30" <?php echo (isset($mujer30) && $mujer30 === 'No') ? 'checked' : ''; ?>>No
</li>
            
        

        
            
            </ul>
            </form>
                  
        </div>
        
    </div>
 

    </div>

    <div class="centered-container">
        <a
        name="siguiente"
        id="siguiente"
        class="btn btn-success"
        href="nuevo2.php"
        role="button"
        width="50px"
        height="50px"
        >Siguiente</a>
        </div>
</body>
</html>