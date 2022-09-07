<?php
require_once "conexion.php";

function cargarContenido($controlador,$accion){
	require_once "Controller/".$controlador."_controlador.php";
	$c = $controlador."_controlador";
	$obj = new $c();
	require_once "Model/".$controlador."_modelo.php";
	$obj->$accion();

}
if(isset($_REQUEST['controlador'])&&isset($_REQUEST['accion'])){
	$controlador = $_REQUEST['controlador'];
	$accion = $_REQUEST['accion'];
}else{
	$controlador = "inicio";
	$accion = "index";
}

$controladores = array(
	"inicio" => array("index","validar","cerrar"),
	"usuario" => array("index","frmCrear","crear"),
	"programa" => array("index","frmCrear","validar","crear","buscarprograma","frmeditar","eliminar","editar"),
	"formacion" => array("index","validar","frmCrear","crear","buscarformacion","frmeditar","eliminar","editar")
);

if(array_key_exists($controlador, $controladores)){
	if (in_array($accion, $controladores[$controlador])){
		cargarContenido($controlador,$accion);
	}
	else{
		echo "<br>Error[001]: Contenido No Disponible";
	}
}else{
	echo "<br>Error[001]: Contenido No Disponible";
}


?>