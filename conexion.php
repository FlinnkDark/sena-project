<?php 
$servidor="localhost:3310";
$usuario="root";
$password="";
$bd="sistema control de activides";
$conecta = mysqli_connect($servidor,$usuario,$password,$bd);
if($conecta->connect_error){
  die("Error al conectar con la base de datos".$conecta->connect_error);
}

?>