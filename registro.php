<?php
  require 'conexion.php';

  $message = '';

  if (!empty($_POST['email']) && !empty($_POST['clave'])) {
    $sql = "INSERT INTO alumno (email, clave) VALUES (:email, :clave)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $_POST['email']);
    $clave = password_hash($_POST['clave'], PASSWORD_BCRYPT);
    $stmt->bindParam(':clave', $clave);

    if ($stmt->execute()) {
      $message = 'Registrado Exisoto';
    } else {
      $message = 'Hubo un Problema';
    }
  }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos del Alumno</title>
    <link rel="stylesheet" href="css/style.css">
</head>

    <body>
    <?php require 'header.php' ?>
        <div class="container">
            <h1>Registro de Alumno</h1>
            <form action="guardar.php" method="POST">
                <label>Nombres:</label>
                <input type="text" name="nombre" placeholder="Ingresa Tus Nombres" required=""><br></br>
                <label>Apellidos:</label>
                <input type="text" name="apellido" placeholder="Ingresa Tus Apellidos" required=""><br></br>
                <label>Direccion:</label>
                <input type="text" name="adrees" placeholder="Ingresa Tu Direccion" required=""><br></br>
                <label>Telefono:</label>
                <input type="text" name="tel" placeholder="Ingresa Tu N. Celular" required=""><br></br>
                <label>Correo:</label>
                <input type="text" name="email" placeholder="Ingresa Tu Email" required=""><br></br>
                <label>Contraseña</label>
                <input type="password" name="clave" placeholder="Ingresa Tu Contraseña" required=""><br></br>
                <button class="btn" name="enviar" >registrarme</button>
            </form>
            <?php
              if(isset($_POST['nombre'])&& isset($_POST['apellido'])&& isset($_POST['adrees'])&& isset($_POST['tel'])&& isset($_POST['email']) && isset($_POST['clave']))
              require_once "conexion.php";
            ?>
        </div>
    </body>
</html>