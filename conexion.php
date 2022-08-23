<?php
function conectar(){
  $host="localhost";
  $usuario="root";
  $password="";
  $basedatos="sistema control de actividades";

  $connection=mysqli_connect($host,$usuario,$password,$basedatos);
mysqli_set_charset($connection, 'utf8');
if(!$connection){
  $data=array ("error"=> 'No se pudo realizar la conexión');
  die(json_encode($data));
}

  if (mysqli_connect_errno()){
    printf ("Falló la Coneción: %s\n", mysqli_connect_error());
    exit();
  }
  function showerror( ){
    die("se ha producido el siguiente error: " . mysqli_error($connection=mysqli_connect()));
  }

  if (!(@mysqli_select_db($connection,$basedatos)));
  showerror( );

  return $connection;

}

?>