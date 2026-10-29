<?php
$servidor = "localhost";
$usuario  = "root"; 
$password = "";     
$base_datos = "libreria_nakano";

$conexion = new mysqli($servidor, $usuario, $password, $base_datos);

if ($conexion->connect_error) {
    die("Error en la conexión a la base de datos: " . $conexion->connect_error);
}
?>