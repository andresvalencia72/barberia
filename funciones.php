<?php




function estaOk()
{
    $respuesta = false;
    if(isset($_SESSION["cliente"])&& $_SESSION['cliente']!=''){
        // if(isset($_SESSION['cuando'])&&time()-$_SESSION['cuando']<5){
            $respuesta = true;
        //     $_SESSION['cuando']=time();
        // }
    }
    return $respuesta;

}
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
            $resultado = $value['nombre'];
        }
    }else{
        $resultado=null;
    }
    return $resultado;
}

function mostrarServicios(){
    $conexion = conecta();
    $orden = 'SELECT codigo, nombre, precio, descripcion FROM servicio WHERE activo =1';
    $resultado  = $conexion->query($orden);
    return $resultado;
}

// function mostrarHorarios($fecha){
//     $conexion = conecta();
//     $orden = 'SELECT c.codigo, c.cod_cliente, c.cod_empleado, c.descripcion, c.fecha, c.tipo_servicio FROM citas c JOIN horarios h ';
//     $resultado = $conexion->query($orden);
//     return $resultado;
// }

function mostrarHorarios(){
    $conexion = conecta();
    $orden = 'SELECT codigo, horario FROM horarios ';
    $resultado = $conexion->query($orden);
    return $resultado;
}

function mostrarFechasNoDisponibles($fecha){
    $conexion  = conecta();
    $orden = "SELECT CAST(fecha AS DATE) AS SoloFecha ,descripcion FROM citas where CAST(fecha AS DATE)  ='$fecha'";
    $resultado  = $conexion->query($orden);
    return $resultado;

}
?>