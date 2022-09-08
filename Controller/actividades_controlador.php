<?php 

class actividades_controlador{
	public function frmRegistro(){
		require_once "View/actividades/frmRegistro.php";
	}
	public function crear(){
		$ent = actividades_modelo::mdlvalidardocumento($_POST['doc']);
		if($ent){
			$res = actividades_modelo::mdlcrear($_POST['doc'],$_POST['date'],$_POST['act']);
			if($res == 1){
				echo "<script> alert('Registro exitoso!')</script>";
				$this->frmRegistro();
			}
		}else{
			echo "<script> alert('El documento enviado es invalido')</script>";
		}
	}
}


?>