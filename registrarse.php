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
        }

        input {
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
    </style>
    <title>Registro</title>
</head>
<body>

<form action="comprueba.php" method="post">
    <input type="text" placeholder="Tu nombre" name="nombre" required>
    <input type="text" placeholder="Tu apellido" name="apellido" required>
    <input type="email" placeholder="Correo" name="correo" required>
    <input type="password" placeholder="Contraseña" name="contrasenia" required>
    <input type="tel" placeholder="Tu teléfono" name="telefono" required>
    <input type="submit" name="registra">
</form>

</body>
</html>
