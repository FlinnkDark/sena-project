<?php

class inicio_controlador{
	public function index(){
		require_once "View/inicio/login.php";
	}

	public function validar(){
		$r=inicio_modelo::mdlValidar($_POST['usr'],$_POST['pwd']);
		if ($r == 1){
			header('Location: /sena-proyecto?controlador=inicio&accion=principal');
		}else{
			echo '<script> alert("Usuario contraseña incorrectos")</script>';
			$this->index();
		}
	}

	public function principal(){
		require_once "View/inicio/principal.php";
	}

	public function cerrar(){
		session_destroy();
		header('Location: /sena-proyecto?controlador=inicio&accion=index');
	}
}

?>