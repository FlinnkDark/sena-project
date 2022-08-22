<?php
function conectar(){
  $host="localhost";
  $user="root";
  $pass="";

  $bd="sistema control de actividades";

  $com=mysqli_connect($host,$user,$pass);

  mysqli_select_db($com,$bd);
  
  return $com;

}

?>