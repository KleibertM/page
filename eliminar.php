<?php
require_once "conexion.php";
$cod=$_GET['cod'];
$eliminar=$base->prepare("DELETE FROM alumno WHERE cod=:cod");
$eliminar->bindParam(':cod',$cod);

if($eliminar->execute()){
 echo "Datos eliminados correctamente..";
}else{
 echo "No se ha podido eliminar los datos..";
}
header("Status: 301 Moved Permanently");
header("Location: index.php");
exit;

?>
