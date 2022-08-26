<?php

require_once "config/GeneralController.php";

class MenuController  extends GeneralController {
    
    public function index() {
        $this->loadView("menu/index.php", "");
    }

    public function listar() {
        $objMenu = $this->loadModel("MenuModel");
        $dataMenu = $objMenu->listar();
        print_r($dataMenu);
        echo "MenuControlador metodo index"; 
    }

    public function nuevo() {
        $objMenu = $this->loadModel("MenuModel");
        $dataMenu = $objMenu->registrar();
        echo $dataMenu;
    }
    
    public function actualizar() {
        $objMenu = $this->loadModel("MenuModel");
        $dataMenu = $objMenu->actualizar();
        echo $dataMenu;
    }

}