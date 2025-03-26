<?php

include("../../bd.php");

if (isset($_GET['txtID'])) {

    $txtID=(isset($_GET['txtID']))?$_GET['txtID']:"";

    $sentencia=$conexion->prepare("SELECT * FROM portafolio WHERE id=:id");
    $sentencia->bindParam(":id",$txtID);
    $sentencia->execute();
    $registro=$sentencia->fetch(PDO::FETCH_LAZY);

    $titulo=$registro['titulo'];
    $subtitulo=$registro['subtitulo'];
    $imagen=$registro['imagen'];
    $descripcion=$registro['descripcion'];
    $categoria=$registro['categoria'];
    $ubicacion=$registro['ubicacion'];

}

if ($_POST) {
    
    $txtID=(isset($_POST['txtID']))?$_POST['txtID']:"";
    $titulo=(isset($_POST['titulo']))?$_POST['titulo']:"";
    $subtitulo=(isset($_POST['subtitulo']))?$_POST['subtitulo']:"";
    $descripcion=(isset($_POST['descripcion']))?$_POST['descripcion']:"";
    $categoria=(isset($_POST['categoria']))?$_POST['categoria']:"";
    $ubicacion=(isset($_POST['ubicacion']))?$_POST['ubicacion']:"";

    $sentencia=$conexion->prepare("UPDATE portafolio 
    SET 
    titulo=:titulo,
    subtitulo=:subtitulo,
    descripcion=:descripcion,
    categoria=:categoria,
    ubicacion=:ubicacion
    WHERE id=:id");

    $sentencia->bindParam(":titulo",$titulo);
    $sentencia->bindParam(":subtitulo",$subtitulo);
    $sentencia->bindParam(":descripcion",$descripcion);
    $sentencia->bindParam(":categoria",$categoria);
    $sentencia->bindParam(":ubicacion",$ubicacion);
    $sentencia->bindParam(":id",$txtID);

    $sentencia->execute();

    if ($_FILES["imagen"]["tmp_name"]!="") {

    $imagen=(isset($_FILES['imagen']['name']))?$_FILES['imagen']['name']:"";
    $fecha_imagen=new DateTime();
    $nombre_archivo_imagen=($imagen!="")? $fecha_imagen->getTimestamp()."_".$imagen:"";
    
    $tmp_imagen=$_FILES['imagen']['tmp_name'];

    move_uploaded_file($tmp_imagen,"../../../assets/img/portfolio/".$nombre_archivo_imagen);

    $sentencia=$conexion->prepare("SELECT imagen FROM portafolio WHERE id=:id");
    $sentencia->bindParam(":id",$txtID);
    $sentencia->execute();
    $registro_imagen=$sentencia->fetch(PDO::FETCH_LAZY);

    if (isset($registro_imagen["imagen"])) {
        if (file_exists("../../../assets/img/portfolio/".$registro_imagen["imagen"])) {
            
            unlink("../../../assets/img/portfolio/".$registro_imagen["imagen"]);

        }
    }

    $sentencia=$conexion->prepare("UPDATE portafolio SET imagen=:imagen WHERE id=:id");
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
        Editando el inventario
    </div>
    <div class="card-body">
        <form action="" enctype="multipart/form-data" method="post">

    <div class="mb-3">
      <label for="txtID" class="form-label">ID:</label>
      <input type="text" readonly
        class="form-control" name="txtID" id="txtID" value="<?php echo $txtID; ?>" aria-describedby="helpId" placeholder="ID">
    </div>

<div class="mb-3">
  <label for="titulo" class="form-label">Título:</label>
  <input type="text"
    class="form-control" value="<?php echo $titulo; ?>" name="titulo" id="titulo" aria-describedby="helpId" placeholder="Titulo">
</div>

<div class="mb-3">
  <label for="subtitulo" class="form-label">Subtitulo:</label>
  <input type="text"
    class="form-control" value="<?php echo $subtitulo; ?>" name="subtitulo" id="subtitulo" aria-describedby="helpId" placeholder="Subtitulo">
</div>

<div class="mb-3">
  <label for="imagen" class="form-label">Imagen:</label>
  <img width="150" src="../../../assets/img/portfolio/<?php echo $imagen; ?>"><br><br>
  <input type="file" class="form-control" name="imagen" id="imagen" placeholder="Imagen" aria-describedby="fileHelpId">
</div>

<div class="mb-3">
  <label for="descripcion" class="form-label">Descripción:</label>
  <input type="text"
    class="form-control" value="<?php echo $descripcion; ?>" name="descripcion" id="descripcion" aria-describedby="helpId" placeholder="Descripcion">
</div>

<div class="mb-3">
  <label for="categoria" class="form-label">Categoria:</label>
  <input type="text"
    class="form-control" value="<?php echo $categoria; ?>" name="categoria" id="categoria" aria-describedby="helpId" placeholder="Categoria">
</div>

<div class="mb-3">
  <label for="ubicacion" class="form-label">Ubicacion:</label>
  <input type="text"
    class="form-control" value="<?php echo $ubicacion; ?>" name="ubicacion" id="ubicacion" aria-describedby="helpId" placeholder="Ubicacion donde se encuentra el producto">
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