<?php
class usuario_controlador{

	public function frmCrear(){
		require_once "View/usuario/frmCrear.php";
	}
	public function crear(){
		$ent = usuario_modelo::mdlvalidarusuario($_POST['numdoc']);
		if($ent == 0){
			$res = usuario_modelo::mdlcrear($_POST['nom'],$_POST['numdoc'],$_POST['emp']);
			if($res == 1){
				echo '<script> alert("Registro exitoso!")</script>';
				require_once "view/inicio/principal.php";
			} else {
				echo "Hubo un error al registrar el usuario";
			}
		}else{
			echo "Este usuario ya esta registrado";
		}
	}
}












?>