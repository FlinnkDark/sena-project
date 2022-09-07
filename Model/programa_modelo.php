<?php
class programa_modelo{
	public function mdlcrear($nom,$cod){
		$db = new conexion();
		$c = $db ->conectar();
		$reg = "INSERT INTO t_programa(PRO_Nombre,PRO_Codigo,PRO_Estado) VALUES (:nom,:cod,:est)";
		$res = $c -> prepare($reg);
		$est = $res -> execute(array("nom" => $nom,"cod" => $cod,"est" => 1));
		return $est;

	}

	public static function mdlvalidarprograma($cod){
		$db = new conexion();
		$c = $db -> Conectar();
		$consulta = "SELECT * FROM t_programa WHERE PRO_Codigo = :c";
		$res = $c -> prepare($consulta);
		$res -> setFetchMode(PDO::FETCH_ASSOC);
		$res -> execute(array("c" => $cod));
		if($res->rowCount()>0){
			return 1;
		}else{
			return 0;
		}
	}
	public static function mdlbuscarprogramas($cod){
		$db = new conexion();
		$c = $db->conectar();
		$consulta = "SELECT * FROM t_programa WHERE PRO_Codigo LIKE ?";
		$res = $c->prepare($consulta);
		$res->setFetchMode(PDO::FETCH_ASSOC);
		$res->execute(array("$cod%"));
		if ($res->rowCount() > 0) {
			return $res->fetchAll();
		}
		else{
			return 0;
		}

	}
	public static function mdlbuscarxid($id){
		$db = new conexion();
		$c = $db -> Conectar();
		$consulta = "SELECT * FROM t_programa WHERE PRO_ID = :id";
		$res = $c -> prepare($consulta);
		$res -> setFetchMode(PDO::FETCH_ASSOC);
		$res -> execute(array("id" => $id));
		return $res -> fetch();
	}
	public static function mdleditar($nom,$cod,$id){
		$db = new conexion();
		$c = $db ->conectar();
		$qry = "UPDATE t_programa SET PRO_Nombre = :nom,PRO_Codigo = :cod WHERE PRO_ID = :id";
		$res = $c -> prepare($qry);
		$est = $res -> execute(array("nom" => $nom,"cod" => $cod,"id" => $id));
		return $est;
	}
	public static function mdleliminar($id){
		$db = new conexion();
		$c = $db ->conectar();
		$qry = "DELETE FROM t_programa WHERE PRO_ID = :id";
		$res = $c -> prepare($qry);
		$est = $res -> execute(array("id" => $id));
		return $est;
	}

}