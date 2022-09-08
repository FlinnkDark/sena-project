<?php
class actividades_modelo{

	public static function mdlcrear($doc,$date,$act){
		$db = new conexion();
		$c = $db ->conectar();
		$reg = "INSERT INTO actividades(documento,fecha,actividad) VALUES (:doc,:date,:act)";
		$res = $c -> prepare($reg);
		$est = $res -> execute(array("doc" => $doc,"date" => $date,"act" => $act));
		return $est;
	}

	public static function mdlvalidardocumento($cod){
		$db = new conexion();
		$c = $db -> Conectar();
		$consulta = "SELECT * FROM usuarios WHERE documento = :c";
		$res = $c -> prepare($consulta);
		$res -> setFetchMode(PDO::FETCH_ASSOC);
		$res -> execute(array("c" => $cod));
		if($res->rowCount()>0){
			return 1;
		}else{
			return 0;
		}
	}

}