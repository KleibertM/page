<?php 
require_once "conexion.php";
$cod=$_GET['cod'];
$nombre=$_GET['nombre'];
$apellido=$_GET['apellido'];
$adrees=$_GET['adrees'];
$tel=$_GET['tel'];
$email=$_GET['email'];
$sql=$base->prepare("UPDATE alumno SET nombre=:nombre, apellido=:apellido, adrees=:adress, tel=:tel, email=:email WHERE cod=:cod");
$sql->bindParam(":cod",$cod);
$sql->bindParam(":nombre",$nombre);
$sql->bindParam(":apellido",$apellido);
$sql->bindParam(":adrees",$adrees);
$sql->bindParam(":tel",$tel);
$sql->bindParam(":email",$email);

if($sql->execute()){
    echo "Datos modificados correctamente..";
}else{
    echo "No se pudo modificar el registro..";
}
?>