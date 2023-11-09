<?php





function conecta()
{
    $conexion = new mysqli('localhost', 'root', '', 'barberia');
    $conexion->set_charset('utf8');
    return $conexion;
}

function comprobarUsuario($email, $contrasenia)
{
    $conexion = conecta();
    $orden = "SELECT codigo FROM clientes WHERE email='$email' AND contrasenia='$contrasenia'";
    $resultado = $conexion->query($orden);
    if($resultado->fetch_array()){
        foreach($resultado as $key => $value) {
            $resultado = $value['codigo'];
        }
    }else{
        $resultado=null;
    }
    return $resultado;
    
}


function dimeNombre($cod_cliente){
    $conexion = conecta();
    $orden = "SELECT nombre FROM clientes WHERE codigo = '$cod_cliente'";
    $resultado = $conexion->query($orden);
    if($resultado->fetch_array()){
        foreach($resultado as $key => $value) {
            $resultado = $value['codigo'];
        }
    }else{
        $resultado=null;
    }
    return $resultado;
}



?>