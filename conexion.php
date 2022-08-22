<?php
function conectar(){
  $host="localhost";
  $user="root";
  $pass="";

  $bd="sistema control de actividades";

  $connection=mysqli_connect($host,$user,$pass);

  mysqli_select_db($connection,$bd);

  return $connection;

}

?>