<?php
class usuario_modelo{
	public function mdlcrear($nom,$ape,$email,$tdp,$numdoc,$nac){
		$db = new conexion();
		$c = $db ->conectar();
		$reg = "INSERT INTO t_usuarios(USU_Nombre,USU_Apellido,USU_Correo,USU_Tipo_Doc,USU_Num_Doc,USU_Password,USU_Fecha_Nacimiento,USU_Rol) VALUES (:nom,:ape,:email,:tdp,:numdoc,:pass,:nac,:rol)";
		$res = $c -> prepare($reg);
		$est = $res -> execute(array("nom" => $nom,"ape" => $ape,"email" => $email,"tdp" => $tdp,"numdoc" => $numdoc,"pass" => sha1($numdoc),"nac" => $nac,"rol" => 2));
		return $est;

	}

	public static function mdlvalidarusuario($numdoc){
		$db = new conexion();
		$c = $db -> Conectar();
		$consulta = "SELECT * FROM t_usuarios WHERE USU_Num_Doc = :u";
		$res = $c -> prepare($consulta);
		$res -> setFetchMode(PDO::FETCH_ASSOC);
		$res -> execute(array("u" => $numdoc));
		if($res->rowCount()>0){
			return 1;
		}else{
			return 0;
		}
	}
}