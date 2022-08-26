<?php

$__url = explode("/", $_SERVER['REQUEST_URI']);

if (isset($__url[3]) && isset($__url[4])) {
    $__controlador = ucwords($__url[3]) . "Controller";
    $__metodo = explode("?", $__url[4])[0];
} else {
    $__controlador = "InicioController";
    $__metodo = "index";
}

require_once "controllers/{$__controlador}.php";
$__objController = new $__controlador();
$__objController->$__metodo();

?>