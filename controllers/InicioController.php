<?php

require_once "config/GeneralController.php";
class InicioController extends GeneralController {

    public function index() {
        $this->loadView("index.php", "");
    }

}