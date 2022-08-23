<?php 
$servidor="localhost";
$usuario="root";
$password="";
$bd="sistema control de activides";
$conecta= mysqli_connect($servidor,$usuario,$password,$bd);
mysqli_set_charset($conecta,'utf8mb4_unicode_ci');
if($conecta->connect_error){
  die("Error al conectar con la base de datos".$conecta->connect_error);
}


?>