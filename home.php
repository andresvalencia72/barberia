<?php
session_start();
    echo 'Bienvenido';
    $codigo_cliente = $_SESSION['cliente'];
    echo $_SESSION['cliente'];
    dimeNombre($codigo_cliente);
?>