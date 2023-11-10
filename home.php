<?php
require_once("funciones.php");
session_start();
$nombre = $_SESSION['cliente'];
$nombre = dimeNombre($nombre);

echo 'Bienvenido ' .$nombre;
?>