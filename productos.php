<?php include("template/cabecera.php")?>

<?php include("administrador/config/bd.php");

$sentenciaSQL= $conexion->prepare("SELECT * FROM libros");
$sentenciaSQL->execute();
$listaLibros= $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
$links = ["matematicas/index.php", "musica/index.php"];

?>



<?php foreach($listaLibros as $libro){ ?>
  <br><br>
<div class="col-md-3" style="margin:20px;">
<div class="card" style="width: 18rem; height:300px; padding:20px; margin:10px;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $libro['nombre']?></h5>
    <img class="card-img-top" style="width:200px; height:150px;" src="./img/<?php echo $libro['imagen']?>" alt="">
    <p class="card-text">Ejercicios para mejorar</p> 

    <a  href="<?php echo current($links); ?>" class="btn btn-primary">Ver mas</a>
  </div>
</div>
</div>

<?php
// Avanzar al siguiente elemento de $links
next($links);
}?>

<?php include("template/pie.php")?>