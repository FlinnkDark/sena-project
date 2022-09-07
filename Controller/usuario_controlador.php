<?php
class usuario_controlador{

	public function index(){
		require_once "View/usuario/index.php";
	}
	public function frmCrear(){
		require_once "View/usuario/frmCrear.php";
	}
	public function crear(){
		$ent = usuario_modelo::mdlvalidarusuario($_POST['numdoc']);
		if($ent == 0){
			$res = usuario_modelo::mdlcrear($_POST['nom'],$_POST['ape'],$_POST['email'],$_POST['tdp'],$_POST['numdoc'],$_POST['nac']);
			if($res == 1){
				echo "Registro exitoso";
			}
		}else{
			echo "Este usuario ya esta registrado";
		}
	}
}












?>