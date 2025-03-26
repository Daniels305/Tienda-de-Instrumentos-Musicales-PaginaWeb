<?php

include("../../bd.php");

if ($_POST) {

    $titulo=(isset($_POST['titulo']))?$_POST['titulo']:"";
    $subtitulo=(isset($_POST['subtitulo']))?$_POST['subtitulo']:"";
    $imagen=(isset($_FILES['imagen']['name']))?$_FILES['imagen']['name']:"";
    $descripcion=(isset($_POST['descripcion']))?$_POST['descripcion']:"";
    $categoria=(isset($_POST['categoria']))?$_POST['categoria']:"";
    $ubicacion=(isset($_POST['ubicacion']))?$_POST['ubicacion']:"";

    $fecha_imagen=new DateTime();
    $nombre_archivo_imagen=($imagen!="")? $fecha_imagen->getTimestamp()."_".$imagen:"";
    
    $tmp_imagen=$_FILES['imagen']['tmp_name'];
    if ($tmp_imagen!="") {
      move_uploaded_file($tmp_imagen,"../../../assets/img/portfolio/".$nombre_archivo_imagen);
    }

    $sentencia=$conexion->prepare("INSERT INTO `portafolio` (`ID`, `titulo`, `subtitulo`, `imagen`, `descripcion`, `categoria`, `ubicacion`) 
    VALUES (NULL, :titulo, :subtitulo, :imagen, :descripcion, :categoria, :ubicacion);");

    $sentencia->bindParam(":titulo",$titulo);
    $sentencia->bindParam(":subtitulo",$subtitulo);
    $sentencia->bindParam(":imagen",$nombre_archivo_imagen);
    $sentencia->bindParam(":descripcion",$descripcion);
    $sentencia->bindParam(":categoria",$categoria);
    $sentencia->bindParam(":ubicacion",$ubicacion);

    $sentencia->execute();

    $mensaje="Registro agregado con exito.";
    header("Location:index.php?mensaje=".$mensaje);

}

include("../../templates/header.php");

?>

<div class="card">
    <div class="card-header">
        Productos
    </div>
    <div class="card-body">
        <form action="" enctype="multipart/form-data" method="post">

<div class="mb-3">
  <label for="titulo" class="form-label">Título:</label>
  <input type="text"
    class="form-control" name="titulo" id="titulo" aria-describedby="helpId" placeholder="Titulo">
</div>

<div class="mb-3">
  <label for="subtitulo" class="form-label">Subtitulo:</label>
  <input type="text"
    class="form-control" name="subtitulo" id="subtitulo" aria-describedby="helpId" placeholder="Subtitulo">
</div>

<div class="mb-3">
  <label for="imagen" class="form-label">Imagen:</label>
  <input type="file" class="form-control" name="imagen" id="imagen" placeholder="Imagen" aria-describedby="fileHelpId">
</div>

<div class="mb-3">
  <label for="descripcion" class="form-label">Descripción:</label>
  <input type="text"
    class="form-control" name="descripcion" id="descripcion" aria-describedby="helpId" placeholder="Descripcion">
</div>

<div class="mb-3">
  <label for="categoria" class="form-label">Categoria:</label>
  <input type="text"
    class="form-control" name="categoria" id="categoria" aria-describedby="helpId" placeholder="Categoria">
</div>

<div class="mb-3">
  <label for="ubicacion" class="form-label">Ubicacion:</label>
  <input type="text"
    class="form-control" name="ubicacion" id="ubicacion" aria-describedby="helpId" placeholder="Ubicacion donde se encuentra el producto">
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