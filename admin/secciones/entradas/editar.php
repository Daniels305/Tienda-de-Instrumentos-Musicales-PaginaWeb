<?php

include("../../bd.php");

if (isset($_GET['txtID'])) {

    $txtID=(isset($_GET['txtID']))?$_GET['txtID']:"";

    $sentencia=$conexion->prepare("SELECT * FROM entradas WHERE id=:id");
    $sentencia->bindParam(":id",$txtID);
    $sentencia->execute();
    $registro=$sentencia->fetch(PDO::FETCH_LAZY);

    $titulo=$registro['titulo'];
    $descripcion=$registro['descripcion'];
    $imagen=$registro['imagen'];

}

if ($_POST) {

    $txtID=(isset($_POST['txtID']))?$_POST['txtID']:"";
    $titulo=(isset($_POST['titulo']))?$_POST['titulo']:"";
    $descripcion=(isset($_POST['descripcion']))?$_POST['descripcion']:"";

    $sentencia=$conexion->prepare("UPDATE entradas 
    SET 
    titulo=:titulo,
    descripcion=:descripcion
    WHERE id=:id");

    $sentencia->bindParam(":titulo",$titulo);
    $sentencia->bindParam(":descripcion",$descripcion);
    $sentencia->bindParam(":id",$txtID);

    $sentencia->execute();

    if ($_FILES["imagen"]["tmp_name"]!="") {

        $imagen=(isset($_FILES['imagen']['name']))?$_FILES['imagen']['name']:"";
        $fecha_imagen=new DateTime();
        $nombre_archivo_imagen=($imagen!="")? $fecha_imagen->getTimestamp()."_".$imagen:"";
        
        $tmp_imagen=$_FILES['imagen']['tmp_name'];
    
        move_uploaded_file($tmp_imagen,"../../../assets/img/about/".$nombre_archivo_imagen);
    
        $sentencia=$conexion->prepare("SELECT imagen FROM entradas WHERE id=:id");
        $sentencia->bindParam(":id",$txtID);
        $sentencia->execute();
        $registro_imagen=$sentencia->fetch(PDO::FETCH_LAZY);
    
        if (isset($registro_imagen["imagen"])) {
            if (file_exists("../../../assets/img/about/".$registro_imagen["imagen"])) {
                
                unlink("../../../assets/img/about/".$registro_imagen["imagen"]);
    
            }
        }
    
        $sentencia=$conexion->prepare("UPDATE entradas SET imagen=:imagen WHERE id=:id");
        $sentencia->bindParam(":imagen",$nombre_archivo_imagen);
        $sentencia->bindParam(":id",$txtID);
    
        $sentencia->execute();
    
      }

      $mensaje="Registro modificado con exito.";
      header("Location:index.php?mensaje=".$mensaje);

}

include("../../templates/header.php");

?>

<div class="card">
    <div class="card-header">
        Editando información
    </div>
    <div class="card-body">

    <form action="" method="post" enctype="multipart/form-data">

    <div class="mb-3">
      <label for="txtID" class="form-label">ID:</label>
      <input type="text" readonly
        class="form-control" name="txtID" id="txtID" value="<?php echo $txtID; ?>" aria-describedby="helpId" placeholder="ID">
    </div>

    <div class="mb-3">
      <label for="titulo" class="form-label">Titulo:</label>
      <input type="text"
        class="form-control" value="<?php echo $titulo; ?>" name="titulo" id="titulo" aria-describedby="helpId" placeholder="Titulo">
    </div>

    <div class="mb-3">
      <label for="descripcion" class="form-label">Descripción:</label>
      <input type="text"
        class="form-control" value="<?php echo $descripcion; ?>" name="descripcion" id="descripcion" aria-describedby="helpId" placeholder="Descripción">
    </div>

    <div class="mb-3">
      <label for="imagen" class="form-label">Imagen:</label>
      <img width="150" src="../../../assets/img/about/<?php echo $imagen; ?>"><br><br>
      <input type="file" class="form-control" name="imagen" id="imagen" aria-describedby="helpId" placeholder="Imagen">
    </div>
    
    <button type="submit" class="btn btn-success">Actualizar</button>

    <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>

    </form>

    </div>
    <div class="card-footer text-muted">

    </div>
</div>

<?php
include("../../templates/footer.php");
?>