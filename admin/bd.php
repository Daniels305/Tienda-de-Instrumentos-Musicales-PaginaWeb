<?php
$servidor="localhost";
$base_datos="crazy_strings";
$usuario="root";
$contraseña="";

try {
    
    $conexion=new PDO("mysql:host=$servidor;dbname=$base_datos",$usuario,$contraseña);

} catch (Exception $error) {
    echo $error->getMessage();
}
?>