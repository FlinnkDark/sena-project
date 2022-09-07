<?php

class inicio_controlador{
	public function index(){
		require_once "View/inicio/login.php";
	}

	public function validar(){
		$r=inicio_modelo::mdlValidar($_POST['usr'],$_POST['pwd']);
		if ($r == 1){
			var_dump($_SESSION);
			header('Location: /sena-proyecto');
		}else{
			echo '<script> alert("Usuario contraseña incorrectos")</script>';
			require_once "view/inicio/login.php";
		}
	}
	public function cerrar(){
		session_destroy();
	}
}




?>