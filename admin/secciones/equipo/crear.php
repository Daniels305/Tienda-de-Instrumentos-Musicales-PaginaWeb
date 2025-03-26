<?php

include("../../bd.php");

if ($_POST) {
    
    $imagen=(isset($_FILES['imagen']['name']))?$_FILES['imagen']['name']:"";
    $nombre_completo=(isset($_POST['nombre_completo']))?$_POST['nombre_completo']:"";
    $puesto=(isset($_POST['puesto']))?$_POST['puesto']:"";

    $fecha_imagen=new DateTime();
    $nombre_archivo_imagen=($imagen!="")? $fecha_imagen->getTimestamp()."_".$imagen:"";
    
    $tmp_imagen=$_FILES['imagen']['tmp_name'];
    if ($tmp_imagen!="") {
      move_uploaded_file($tmp_imagen,"../../../assets/img/team/".$nombre_archivo_imagen);
    }

    $sentencia=$conexion->prepare("INSERT INTO `equipo` (`ID`, `imagen`, `nombre_completo`, `puesto`) 
    VALUES (NULL, :imagen, :nombre_completo, :puesto);");

    $sentencia->bindParam(":imagen",$nombre_archivo_imagen);
    $sentencia->bindParam(":nombre_completo",$nombre_completo);
    $sentencia->bindParam(":puesto",$puesto);

    $sentencia->execute();

    $mensaje="Registro agregado con exito.";
    header("Location:index.php?mensaje=".$mensaje);

}

include("../../templates/header.php");

?>

<div class="card">
    <div class="card-header">
        Equipo
    </div>
    <div class="card-body">

    <form action="" method="post" enctype="multipart/form-data">

    <div class="mb-3">
      <label for="imagen" class="form-label">Imagen:</label>
      <input type="file"
        class="form-control" name="imagen" id="imagen" aria-describedby="helpId" placeholder="Imagen">
    </div>

    <div class="mb-3">
      <label for="nombre_completo" class="form-label">Nombre Completo:</label>
      <input type="text"
        class="form-control" name="nombre_completo" id="nombre_completo" aria-describedby="helpId" placeholder="Nombre completo">
    </div>

    <div class="mb-3">
      <label for="puesto" class="form-label">Puesto:</label>
      <input type="text"
        class="form-control" name="puesto" id="puesto" aria-describedby="helpId" placeholder="Puesto">
    </div>
    
    <button type="submit" class="btn btn-success">Agregar</button>

    <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>

    </form>

    </div>
    <div class="card-footer text-muted">

    </div>
</div>

<?php
include("../../templates/footer.php");
?>