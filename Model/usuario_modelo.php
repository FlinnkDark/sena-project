<?php
class usuario_modelo{
	public static function mdlcrear($nom,$numdoc,$emp){
		$db = new conexion();
		$c = $db ->conectar();
		$reg = "INSERT INTO usuarios(nombre,documento,contraseña,empresa) VALUES (:nom,:numdoc,:pass,:emp)";
		$res = $c -> prepare($reg);
		$est = $res -> execute(array("nom" => $nom,"numdoc" => $numdoc,"pass" => sha1($numdoc),"emp" => $emp));
		return $est;

	}

	public static function mdlvalidarusuario($numdoc){
		$db = new conexion();
		$c = $db -> Conectar();
		$consulta = "SELECT * FROM usuarios WHERE documento = :u";
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