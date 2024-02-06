<?php include("../template/cabecera.php") ?>
<?php 

$txtID=(isset($_POST['txtID']))?($_POST['txtID']):"";
$txtNombre=(isset($_POST['txtNombre']))?($_POST['txtNombre']):"";
$txtImagen=(isset($_FILES["txtImagen"]['name']))?($_FILES["txtImagen"]['name']):"";
$accion=(isset($_POST['accion']))?($_POST['accion']):"";


include("../config/bd.php"); 



switch($accion){
        case "Agregar":
            $sentenciaSQL= $conexion->prepare("INSERT INTO `libros` (nombre,imagen ) VALUES (:nombre,:imagen);");
            $sentenciaSQL->bindParam(':nombre',$txtNombre);


            $fecha= new DateTime();
            $nombreArchivo=($txtImagen!="")?$fecha->getTimestamp()."_".$_FILES["txtImagen"]["name"]:"imagen.jpg";
            $tmpImagen=$_FILES["txtImagen"]["tmp_name"];

            if($tmpImagen!=""){

                move_uploaded_file($tmpImagen,"../../img/".$nombreArchivo);
                
            }


            $sentenciaSQL->bindParam(':imagen',$nombreArchivo);
            $sentenciaSQL->execute();
            //print_r($sentenciaSQL);

            header("Location:productos.php");
            break;

            case "Modificar":
                if ($txtImagen != "") {
                    $fecha = new DateTime();
                    $nombreArchivo = $fecha->getTimestamp() . "_" . $_FILES["txtImagen"]["name"];
                    $tmpImagen = $_FILES["txtImagen"]["tmp_name"];
                    move_uploaded_file($tmpImagen, "../../img/" . $nombreArchivo);
            
                    // Obtener el nombre del libro actual antes de la actualización
                    $sentenciaSQLNombreActual = $conexion->prepare("SELECT nombre, imagen FROM libros WHERE id=:id");
                    $sentenciaSQLNombreActual->bindParam(':id', $txtID);
                    $sentenciaSQLNombreActual->execute();
                    $libroActual = $sentenciaSQLNombreActual->fetch(PDO::FETCH_ASSOC);
            
                    // Actualizar la información del libro con el nuevo nombre y la nueva imagen
                    $sentenciaSQLActualizar = $conexion->prepare("UPDATE libros SET nombre=:nombre, imagen=:imagen WHERE id=:id");
                    $sentenciaSQLActualizar->bindParam(':nombre', $txtNombre);
                    $sentenciaSQLActualizar->bindParam(':imagen', $nombreArchivo);
                    $sentenciaSQLActualizar->bindParam(':id', $txtID);
                    $sentenciaSQLActualizar->execute();
            
                    // Eliminar la imagen anterior si existe y no es "imagen.jpg"
                    if ($libroActual && $libroActual['imagen'] != "imagen.jpg") {
                        $rutaImagenAnterior = "../../img/" . $libroActual['imagen'];
                        if (file_exists($rutaImagenAnterior)) {
                            unlink($rutaImagenAnterior);
                        }
                    }
                } else {
                    // Si no se selecciona una nueva imagen, solo actualizar el nombre del libro
                    $sentenciaSQL = $conexion->prepare("UPDATE libros SET nombre=:nombre WHERE id=:id");
                    $sentenciaSQL->bindParam(':nombre', $txtNombre);
                    $sentenciaSQL->bindParam(':id', $txtID);
                    $sentenciaSQL->execute();
                }
                header("Location: productos.php");
                break;
            

        case "Cancelar":
            header("Location:productos.php");
            break;


        case "seleccionar":
            $sentenciaSQL= $conexion->prepare("SELECT * FROM libros Where id=:id");
            $sentenciaSQL->bindParam(':id',$txtID);
            $sentenciaSQL->execute();
            
            
            $libro= $sentenciaSQL->fetch(PDO::FETCH_LAZY);
             
            
            $txtNombre=$libro['nombre'];
            $txtImagen=$libro['imagen'];
            //print_r($libro['imagen']);
            break;
        case "borrar";
            //echo"presionando boton borrar";

            $sentenciaSQL= $conexion->prepare("SELECT imagen From libros WHERE id=:id");
            $sentenciaSQL->bindParam(':id',$txtID);
            $sentenciaSQL->execute();
            $libro= $sentenciaSQL->fetch(PDO::FETCH_LAZY);
            if(isset($libro['imagen'])&&($libro['imagen']!="imagen.jpg")){

                    if(file_exists("../../img/".$libro['imagen'])){
                        unlink("../../img/".$libro['imagen']);
                    }
            }


            $sentenciaSQL= $conexion->prepare("DELETE From libros WHERE id=:id");
            $sentenciaSQL->bindParam(':id',$txtID);
            $sentenciaSQL->execute();

            header("Location:productos.php");
            break;
        
}
#fetchAll es un método de la clase PDOStatement que se utiliza para obtener todas
#las filas resultantes de una consulta. En este caso, PDO::FETCH_ASSOC es una 
#constante que indica que se deben devolver los resultados como un conjunto de
#arrays asociativos, donde los nombres de las columnas de la tabla son las
#claves y los valores son los datos correspondientes de esas columnas.
$sentenciaSQL= $conexion->prepare("SELECT * FROM libros");
$sentenciaSQL->execute();
$listaLibros= $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);


?>
<div class="col-md-5">
    
    
    <div class="card">
        <div class="card-header">Datos del libro</div>
        <div class="card-body">
        Formulario agregar libros
        <form method="POST" enctype="multipart/form-data">
        <div class = "form-group">
        <label for="txt.ID">ID</label>
        <input type="text" class="form-control" value="<?php echo $txtID?>" name="txtID"id="txtID" placeholder="ID">
        </div>
    
        <div class = "form-group">
        <label for="txt.ID">Nombre del libro</label>
        <input type="text" class="form-control" value="<?php echo $txtNombre?>" name="txtNombre"id="txtNombre" placeholder="Nombre">
        </div>

        <div class = "form-group">
        <label for="txt.Nombre">Imagen:</label>
        
        
        <?php echo $txtImagen?> 
        <?php 
            if($txtImagen!=""){
        ?>
        
        <img src="../../img/<?php echo $txtImagen ?>" width=100 height=100 alt="">

        <?php
            }
            ?>
        ?>

        <input type="file" class="form-control" value="<?php echo $txtImagen?>" name="txtImagen"id="txtImagen" placeholder="imagen">
        </div>

        <br><br>
        <div class="btn-group" role="group" aria-label="Basic example">
        <button type="submit" name="accion" <?php echo ($accion=="seleccionar")?"disabled":"";?> value="Agregar" class="btn btn-success">Agregar</button>
        <button type="submit" name="accion" <?php echo ($accion!="seleccionar")?"disabled":"";?> value="Modificar" class="btn btn-warning">Modificar</button>
        <button type="submit" name="accion" <?php echo ($accion!="seleccionar")?"disabled":"";?>  value="Cancelar" class="btn btn-info">Cancelar</button>
        </div>
            
        </div>
        </div>
    
    
    
    </form>
    
    
</div>


<div class="col-md-7">
    Tabla de Libros
    <div
        class="table-responsive"
    >
        <table
            class="table table-bordered"
        >
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Imagen</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            
          
            <?php foreach($listaLibros as $libro){ ?>
                <tr>
                    
                    <td><?php echo $libro['id'];?></td>
                    <td><?php echo $libro['nombre'];?></td>
                    <td>
                
                    <img src="../../img/<?php echo $libro['imagen'];?>" width=200 height=200 alt="">
                   
                
                    </td>

                    <td>seleccionar | borrar
                        <form method="POST">
                            <input type="hidden" name="txtID" id="txtID" value="<?php echo $libro['id'];?>">
                            <input type="submit" name="accion" value="seleccionar" class="btn btn-primary">
                            <input type="submit" name="accion" value="borrar" class="btn btn-danger">
                        </form>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    
</div>
<?php include("../template/pie.php") ?>