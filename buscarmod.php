<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Registros</title>
</head>
    <body>
    <?php require 'header.php' ?>
        <form action="modificar.php" name="modificar" method="GET">
            <label >codigo a buscar</label><br><input type="text" name="id" require=""><br><br>
            <label >datos a remplazar</label><br>
            <label >nombre</label><br><input type="text" name="nombre" required=""><br>
            <label >apellido</label><br><input type="text" name="apellido" required=""><br>
            <label >Direccion</label><br><input type="text" name="adrees" required=""><br>
            <label >Telefono</label><br><input type="text" name="tel" required=""><br>
            <label >Email.</label><br><input type="text" name="email" required=""><br>
            <button class="btn" name="modificar" >Modificar</button>
        </form>
    </body>
</html>