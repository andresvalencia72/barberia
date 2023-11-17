<?php
    session_start();
    require_once("funciones.php");
    if (estaOk()){
        $nombre = $_SESSION['cliente'];
        $nombre = dimeNombre($nombre);
        echo 'Bienvenido ' .$nombre;
    }else{
        header('Location: index.php');
    }

    if(isset($_POST['close'])){
        header('Location:index.php');
    }




    ?>
    <form action="home.php" method="post">

        <input type="submit" value='cerrar sesión' name="close">
    </form>

    <h2>servicios</h2>
    

    <form action="home.php" method=post>
    <?php
        $servicios = mostrarServicios();
        echo "Elija un servicio a realizar:" ;
        echo "<select>";
        foreach($servicios as $servicio){
            echo "<option>";
            echo $servicio['nombre'];
            echo "</option>";
        }
        echo "</select>";
        echo "<br>";
    ?>
        <label for="">Elija día para su servicio</label>
        <input type="date">
        <br>
        <input type="submit" name=horariosDisponibles value='mostrar horarios disponibles'>
    </form>
    <?php
        // $horarios = mostrarHorarios();
        // echo "<select name= >";
        // foreach($horarios as $horario){
        //     echo "<option>".$horario["horario"]."</option>";
        // }
        // echo "</select>";
    ?>

    <h2>Horarios:</h2>

    <?php
    // $horarios = mostrarHorarios();
    //     foreach($horarios as $horario){
    //         echo "<td>".$horario["fecha"]."</td>";
    //     }
    ?>

