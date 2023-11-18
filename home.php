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
    
    

    <h2>Horarios:</h2>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
            margin-bottom: 20px;
        }

        h2, h3 {
            color: #333;
        }

        select, input, label {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        input::placeholder {
            color: #888;
        }

        .ocupado {
            color: red;
            font-weight: bold;
        }
    </style>
    <title>Reserva de Cita</title>
</head>
<body>

<?php
// ... Tu código PHP aquí
?>

<form action="home.php" method="post">
    <input type="submit" value='Cerrar Sesión' name="close">
</form>

<h2>Servicios</h2>

<form action="home.php" method="post">
    <?php
        $servicios = mostrarServicios();
        echo "Elija un servicio a realizar:" ;
        echo "<select name=servicio>";
        foreach($servicios as $servicio){
            echo "<option value=".$servicio['codigo'].">";
            echo $servicio['nombre'];
            echo "</option>";
        }
        echo "</select>";
        echo "<br>";
    ?>
    <label for="">Elija día para su servicio</label>
    <input type="date" name="fecha">
    <br>
    <input type="submit" name="horariosDisponibles" value='Mostrar Horarios Disponibles'>
</form>

<?php
        if(isset($_POST['fecha']) && isset($_POST['servicio'])){
            $fecha = $_POST['fecha'];
            $servicio = intval($_POST['servicio']);
            // var_dump($servicio);
            $horarios = mostrarHorarios();
            $fechasOcupadas = fechasOcupadas($fecha);
            $periodos = mostrarPeriodos($servicio);
            
            echo "<select name= >";
            
                foreach($fechasOcupadas as $fechaOcupada){
                    foreach($horarios as $horario){
                    // foreach($periodos as $periodo){
                        if($horario["horario"] == $fechaOcupada['hora'] ){
                            while ($periodo = $periodos->fetch_assoc()) {
                                if($periodo['periodo']!=1){

                                    echo "<option>".$horario["horario"]."</option>";
                                }else{
                                    continue;
                                }
                                
                            }
                            //mostrar los periodos del servicio y en cual esta ocupado el barbero
                            
                        }else{
                            echo "<option>".$horario["horario"]."</option>";
                        }

                    // }
                }
                
            }
            
            echo "</select>";
            echo "<br>";
            // Mostrar las fechas ocupadas por los barberos 
            echo "<br>";
           
        }
    ?>

</body>
</html>

    

