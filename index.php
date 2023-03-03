<?php
include_once 'conexion.php';
$stmt=$base->query("SELECT * FROM alumno");
$stmt->setFetchMode(PDO::FETCH_OBJ);
$cont=0;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset=UTF-8">
	<title>Iniciar sesión</title>
	<link rel="stylesheet" href="css/style.css">
</head>
    <body>
		<?php require 'header.php' ?>
		<div class="contenedor-table" align=center>
            <table class="tabla"  border=1>
                <tr class="table__title" bgcolor=skyblue >Datos del Alumno</tr>
                <tr class="title" bgcolor=yellow align="center">
                    <td class="table__header">Item</td>
                    <td class="table__header">Cod. Alumno</td>
                    <td class="table__header">nombre</td>
                    <td class="table__header">apellido</td>
                    <td class="table__header">direccion</td>
                    <td class="table__header">Telefono</td>
                    <td class="table__header">correo</td>
                </tr>
                <?php while ($fila = $stmt->fetch()) : ?>
                <?php $cont = $cont + 1 ?>
                <tr class="item" bgcolor=#eee align="center">
                    <td class="table__item"><?php echo $cont; ?> </td>
                    <td class="table__item"><?php echo $fila->cod; ?></td>
                    <td class="table__item"><?php echo $fila->nombre;?></td>
                    <td class="table__item"><?php echo $fila->apellido; ?></td>
                    <td class="table__item"><?php echo $fila->adrees; ?></td>
                    <td class="table__item"><?php echo $fila->tel; ?></td>
                    <td class="table__item"><?php echo $fila->email; ?></td>
                </tr>
                <?php endwhile  ?>
            </table>
        </div>
		<div class="util" >
			<a href="registro.php">insertar</a>
			<a href="buscar.php">eliminar</a>
			<a href="modificar.php">modificar</a>
		</div>
    </body>
</html>
