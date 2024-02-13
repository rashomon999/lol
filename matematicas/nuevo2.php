<?php
$dibujo1='<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="blue" class="bi bi-check-lg" viewBox="0 0 16 16">
<path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022"/>
</svg>';

$cencal='<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-x-lg" viewBox="0 0 16 16">
<path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"/>
</svg>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios</title>
    <link rel="stylesheet" href="style2.css">
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
<form action="nuevo2.php" method="POST" onsubmit="handleSubmit(event)">
    <div class="contenedor">
        <div class="seccion izquierda">
            
            <br>
            <h1>Continuacion: Factorizar</h1>
            <br>
            <hr>
            <ul>

                <?php $mujer41= isset($_POST['mujer40'])?$_POST['mujer40']:'';
                if($mujer41 === 'xy(x<sup>2</sup>-4)'){
                    $mujer42 = 'correcto';
                }elseif($mujer41 === ''){
                    $mujer42 = '';
                }else{
                    $mujer42 = 'incorrecto';
                } 
                
                
                ?> 
                
                
                <br><br><br>
                <li class="mi-lista">Ejercicio 6:
                <br><br>
                    <img src="../img/Captura de pantalla 2024-01-28 182316.png" alt=""><br><br>
                    <input type="radio" name="mujer40" value="xy(x<sup>2</sup>-4)" id="" <?php print (isset($mujer42) && $mujer42 === 'correcto')?'checked':''; ?>> xy (x<sup>2</sup>-4)

                    <input style="margin-left: 50px;" type="radio" name="mujer40" value="xy(x<sup>2</sup>-4x)" id="">xy (x<sup>2</sup>-4x)
                    
                    <br><br>
                    <button class="btn btn-primary" type="submit">Submit</button>

                    <?php print isset($mujer42)?$mujer42:''; ?>
                </li><br><br><br>
                <h2>Inicio -> Simplifique las siguientes expresiones:</h2>


                <?php
                $mujer60 = isset($_POST['mujer60'])?$_POST['mujer60']:'';

                if($mujer60 === 'x'){
                    $mujer6_1= $dibujo1;
                }elseif($mujer60 === ''){
                    $mujer6_1 = '';
                }else{
                    $mujer6_1 = $cencal;
                }
               

                $joven = isset($_POST['joven'])?$_POST['joven']:'';
                if($joven === 'suma'){
                    $joven_1 = $dibujo1;
                }elseif($joven === ''){
                    $joven_1 = '';
                }else{
                    $joven_1= $cencal;
                }
                
                $mujer61 = isset($_POST['mujer61'])?$_POST['mujer61']:'';

                if($mujer61 === '2'){
                    $mujer61_1= $dibujo1;
                }elseif($mujer61 === ''){
                    $mujer61_1 = '';
                }else{
                    $mujer61_1 = $cencal;
                }


                $mujer62 = isset($_POST['mujer62'])?$_POST['mujer62']:'';

                if($mujer62 === 'x'){
                    $mujer62_1= $dibujo1;
                }elseif($mujer62 === ''){
                    $mujer62_1 = '';
                }else{
                    $mujer62_1 = $cencal;
                }


                $joven1 = isset($_POST['joven1'])?$_POST['joven1']:'';
                if($joven1 === 'suma1'){
                    $joven1_1 = $dibujo1;
                }elseif($joven1 === ''){
                    $joven1_1 = '';
                }else{
                    $joven1_1= $cencal;
                }


                $joven2 = isset($_POST['joven2'])?$_POST['joven2']:'';
                if($joven2 === 'resta2'){
                    $joven2_1 = $dibujo1;
                }elseif($joven1 === ''){
                    $joven2_1 = '';
                }else{
                    $joven2_1= $cencal;
                }

                $joven3 = isset($_POST['joven3'])?$_POST['joven3']:'';
                if($joven3 === 'suma3'){
                    $joven3_1 = $dibujo1;
                }elseif($joven3 === ''){
                    $joven3_1 = '';
                }else{
                    $joven3_1= $cencal;
                }

                $mujer63 = isset($_POST['mujer63'])?$_POST['mujer63']:'';

                if($mujer63 === '1'){
                    $mujer63_1= $dibujo1;
                }elseif($mujer63 === ''){
                    $mujer63_1 = '';
                }else{
                    $mujer63_1 = $cencal;
                }

                $mujer66 = isset($_POST['mujer66'])?$_POST['mujer66']:'';

                if($mujer66 === 'x'){
                    $mujer66_1= $dibujo1;
                }elseif($mujer66 === ''){
                    $mujer66_1 = '';
                }else{
                    $mujer66_1 = $cencal;
                }

                $mujer67 = isset($_POST['mujer67'])?$_POST['mujer67']:'';

                if($mujer67 === '1'){
                    $mujer67_1= $dibujo1;
                }elseif($mujer67 === ''){
                    $mujer67_1 = '';
                }else{
                    $mujer67_1 = $cencal;
                }


                ///

                $mujer64 = isset($_POST['mujer64'])?$_POST['mujer64']:'';

                if($mujer64 === 'x'){
                    $mujer64_1= $dibujo1;
                }elseif($mujer64 === ''){
                    $mujer64_1 = '';
                }else{
                    $mujer64_1 = $cencal;
                }

                $mujer65 = isset($_POST['mujer65'])?$_POST['mujer65']:'';

                if($mujer65 === '2'){
                    $mujer65_1= $dibujo1;
                }elseif($mujer65 === ''){
                    $mujer65_1 = '';
                }else{
                    $mujer65_1 = $cencal;
                }
                ?>
                ?>

                



                

                <li>Ejercicio1:<br><br>
                    <img src="../img/Captura de pantalla 2024-01-28 203230.png" alt="">
                    <br><br>
                    <div style="border-box:flex; text-align:center; margin:0; padding:0; flex-direction:row; width:350px " >
                        (<input size=2 type="text" name="mujer60" value="<?php print isset($mujer60)?$mujer60:''; ?>" id="">

                        <!-- simplemente se selcciona la opcion que se envia, mas simple -->
                        <select name="joven" id="">
                            <option value="" selected disabled></option>
                            <option value="suma" <?php echo (isset($joven) && $joven === 'suma') ? 'selected' : ''; ?>>+</option>
                            <option value="resta" <?php echo (isset($joven) && $joven === 'resta') ? 'selected' : ''; ?>>-</option>
                        </select>
                        
                        <input size=2 type="text" name="mujer61" id="" value="<?php print isset($mujer61)?$mujer61:''; ?>">)


                        (<input size=2 type="text" name="mujer62" id="" value="<?php print isset($mujer62)?$mujer62:''; ?>">
                        <select name="joven1" id="">
                            <option value="" selected disable></option>
                            <option value="suma1" <?php echo (isset($joven1) && $joven1 === 'suma1') ? 'selected' : ''; ?>>+</option>
                            <option value="resta1" <?php echo (isset($joven1) && $joven1 === 'resta1') ? 'selected' : ''; ?>>-</option>
                        </select>
                        <input size=2 type="text" name="mujer63" id="" value="<?php print isset($mujer63)?$mujer63:''; ?>">)
                        <hr>


                        (<input size=2 type="text" name="mujer64" id="" value="<?php print isset($mujer64)?$mujer64:''; ?>">
                        <select name="joven2" id="">
                            <option value="" disable></option>
                            <option value="suma2" <?php echo (isset($joven2) && $joven2 === 'suma2') ? 'selected' : ''; ?>>+</option>
                            <option value="resta2" <?php echo (isset($joven2) && $joven2 === 'resta2') ? 'selected' : ''; ?>>-</option>
                        </select>
                        <input size=2 type="text" name="mujer65" id="" value="<?php print isset($mujer65)?$mujer65:''; ?>">)


                        (<input size=2 type="text" name="mujer66" id="" value="<?php print isset($mujer66)?$mujer66:''; ?>">
                        <select name="joven3" id="">
                            <option value="" disable></option>
                            <option value="suma3" <?php echo (isset($joven3) && $joven3 === 'suma3') ? 'selected' : ''; ?>>+</option>
                            <option value="resta3" <?php echo (isset($joven3) && $joven3 === 'resta3') ? 'selected' : ''; ?>>-</option>
                        </select>
                        <input size=2 type="text" name="mujer67" id="" value="<?php print isset($mujer67)?$mujer67:''; ?>">)

                    </div>
                    <br><br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <?php print isset($mujer6_1)?$mujer6_1:'';?>
                    <?php print isset($joven_1)?$joven_1:'';?>
                    <?php print isset($mujer61_1)?$mujer61_1:'';?>
                    <?php print isset($mujer62_1)?$mujer62_1:'';?>
                    <?php print isset($joven1_1)?$joven1_1:'';?>
                    <?php print isset($mujer63_1)?$mujer63_1:'';?>
                    <?php print isset($mujer66_1)?$mujer66_1:'';?>
                    <?php print isset($mujer67_1)?$mujer67_1:'';?>
                    <?php print isset($mujer64_1)?$mujer64_1:'';?>
                    <?php print isset($mujer65_1)?$mujer65_1:'';?>
                    <?php print isset($joven2_1)?$joven2_1:'';?>
                    <?php print isset($joven3_1)?$joven3_1:'';?>
            </li>
            </ul>
            
            
        </div>

        <div class="seccion derecha">
                    <!-- <div style="border-box:flex; text-align:center; margin:0; padding:0; flex-direction:row; width:350px " >
                        (<input size=5 type="text" name="" id="">
                        <input size=5 type="text" name="" id="">)
                        (<input size=5 type="text" name="" id="">
                        <input size=5 type="text" name="" id="">)
                        <hr>
                        (<input size=5 type="text" name="" id="">
                        <input size=5 type="text" name="" id="">)
                        (<input size=5 type="text" name="" id="">
                        <input size=5 type="text" name="" id="">)
                        
                    </div> -->
        </div>
    </div>
</form>
</body>
</html>