
<?php
/*YA LO ACTUALICE 01/03/2023 - 09:25 KM*/
require_once "conexion.php";
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$adrees=$_POST['adrees'];
$tel=$_POST['tel'];
$email=$_POST['email'];
$consulta=$base->prepare("INSERT INTO alumno (nombre, apellido, adrees, tel, email) VALUES
(:nombre, :apellido, :adrees, :tel, :email)");
$consulta->bindParam(':nombre',$nombre);
$consulta->bindParam(':apellido',$apellido);
$consulta->bindParam(':adrees',$adrees);
$consulta->bindParam(':tel',$tel);
$consulta->bindParam(':email',$email);
if($consulta->execute()){
 echo "Datos guardados correctamente..";
}else{
 echo "No se ha podido guardar los datos..";
}
header("Status: 301 Moved Permanently");
header("Location: login.php");
exit;

?>