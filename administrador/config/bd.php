<?php
$host='localhost';
$db='sitio'; //nombre de la base de datos
$usuario='root'; //por default tiene ese valor
$contraseña=""; //no tenemos contraseña

try {
    $conexion=new PDO("mysql:host=$host;dbname=$db", $usuario, $contraseña);
    if($conexion){
       // echo "conectado al sistema </br>";
    }
} catch (Exception $ex) {
    echo $ex->getMessage();
}
?>