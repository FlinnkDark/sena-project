<?php
class inicio_modelo{
	public static function mdlValidar($usuario, $pass){
		$db = new conexion();
		$c = $db->conectar();
		$consulta = "SELECT * FROM usuarios WHERE documento = :u AND contraseña = :p";
		$res = $c->prepare($consulta);
		$res->setFetchMode(PDO::FETCH_ASSOC);
		$res->execute(array("u"=>$usuario, "p"=>sha1($pass)));
		/*$datos = $res->fetchAll();*/
		if($res->rowCount() > 0){
			$_SESSION = $res->fetch();
			return 1;
		}else{
			return 0;
		}
	}
}