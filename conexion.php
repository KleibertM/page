<?php
try{
  $base=new PDO('mysql:host=localhost; dbname=ejemple1; charset=utf8','root','');
  $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo '';
}catch(Exception $e){
  die('Error: '.$e->GetMessage());
}
?>