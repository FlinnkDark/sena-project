<?php

require_once("config/ConexionDB.php");

class MenuModel extends ConexionDB {

    public function listar() {
        return $this->obtenerData("SELECT * FROM menu");
    }

    public function registrar() {
        $data["padre"] = "0";
        $data["nombre"] = "Opcion 4";
        $data["url"] = "opcion4/mostrar"; 
        return $this->grabaData("menu", $data);
    }

    public function actualizar() {
        $data["nombre"] = "Opcion 5";
        return $this->actualizarData("menu", $data, "idmenu=2");
    }

}