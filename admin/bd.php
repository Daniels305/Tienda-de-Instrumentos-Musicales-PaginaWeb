<?php
$servidor="mysql-crazystrings.mysql.database.azure.com";
$base_datos="crazy_strings";
$usuario="admintienda";
$contraseña="CrazyStrings2026!*";

try {
    $conexion=new PDO("mysql:host=$servidor;dbname=$base_datos",$usuario,$contraseña);
} catch (Exception $error) {
    echo $error->getMessage();
}
?>
