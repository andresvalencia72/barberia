<?php
    require_once("funciones.php");
    session_start();
    
    // Comprueba el usuario en la bbdd al dar click boton de login
    if (isset($_POST["login"])) {
        $email = $_POST['email'];
        $contrasenia = $_POST['contrasenia'];
        
        $cod_cliente = comprobarUsuario($email, $contrasenia);
        
        if($cod_cliente == null) {
            header('Location:index.php');
        }else{
            $_SESSION['cliente']=$cod_cliente;
            header('Location:home.php');
        }
    }



?>