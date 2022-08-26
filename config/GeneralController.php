<?php

class GeneralController {

    public function loadModel($nombreModel) {
        require_once "models/{$nombreModel}.php";
        return new $nombreModel();
    }

    public function loadView($__vista, $__titulo, $__parametros = array()) {
        require_once "views/{$__vista}";
    }
    
}