<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Eliminar Registros</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php require 'header.php' ?>
    <div class="container">
        <form action="eliminar.php" name="eliminar" method="GET">
            <label>Codigo a Buscar</label>
            <input type="text" name="cod" placeholder="Ingresa El Codigo" >
            <button class="btn" name="enviar" >Buscar y Eliminar</button>
        </form>
    </div>
</body>
</html>