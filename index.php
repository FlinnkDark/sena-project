<?php
session_start();
define("URL","http://".$_SERVER['SERVER_NAME']."/sena-proyecto");

require_once "view/plantilla.php"



/*
PRUEBA DE CONEXION
$db = new conexion();
$c = $db->conectar();
$consulta = "SELECT * FROM t_usuarios";
//PREPARACION DE LA CONSULTA
$res = $c->prepare($consulta);
//RETORNO DE UN ARRAY ASOCIATIVO
$res->setFetchMode(PDO::FETCH_ASSOC);
//EJECUTAMOS LA CONSULTA 
$res->execute();
$datos = $res->fetchAll();
echo $res ->rowCount();*/
?>