<?php
    session_start();
    require_once("funciones.php");
    if (estaOk()){
        $nombre = $_SESSION['cliente'];
        $nombre = dimeNombre($nombre);
        echo '<h2>Bienvenido ' .$nombre."</h2>";
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
        <input type="date" name=fecha>
        <br>
        <input type="submit" name=horariosDisponibles value='mostrar horarios disponibles'>
    </form>
    <?php
        if(isset($_POST['fecha'])){
            $fecha = $_POST['fecha'];
            echo $fecha;
            $horarios = mostrarHorarios();
            $fechasNoDisponibles = mostrarFechasNoDisponibles($fecha);
            echo "<select name= >";
            foreach($horarios as $horario){
                echo "<option>".$horario["horario"]."</option>";
            }
            echo "</select>";
            echo "<br>";
            echo 'fechas ocupadas';
            // Mostrar las fechas ocupadas por los barberos 
            echo "<br>";
            foreach($fechasNoDisponibles as $noDisponible){
                echo "<h2>Perro ya esta ocupado</h2>";
                echo $noDisponible['SoloFecha'];
                echo "<br>";
                echo $noDisponible['descripcion'];
            }
        }
    ?>

    <h2>Horarios:</h2>


    

