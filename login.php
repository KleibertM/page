<?php

  session_start();

  if (isset($_SESSION['user_id'])) {
    header('Location: /page');
  }
  require 'conexion.php';

  if (!empty($_POST['email']) && !empty($_POST['clave'])) {
    $records = $conn->prepare('SELECT cod, email, clave FROM alumno WHERE email = :email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (count($results) > 0 && password_verify($_POST['clave'], $results['clave'])) {
      $_SESSION['user_id'] = $results['cod'];
      header("Location: /page");
    } else {
      $message = 'Lo Siento, hubo un problema';
    }
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
  <body>
    <?php require 'header.php' ?>
    <div class="container">
        <h1>Iniciar sesión</h1>
        <form action="index.php" method="POST">
            <label>Email:</label>
            <input type="text" name="email" placeholder="Ingresa Tu Email" required><br>
            <label>Contraseña:</label>
            <input type="password" name="clave" placeholder="Ingresa Tu Clave" required><br>
            <button class="btn" name="enviar" >Iniciar Seccion</button>
        </form>
        <p>¿No tienes una cuenta? <a class="link" href="registro.php">Regístrate</a></p>
    </div> 
  </body>
</html>