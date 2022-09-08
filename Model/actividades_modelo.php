<?php
class actividades_modelo{
	public static function mdlListarPrograma(){
		$db = new conexion();
		$c = $db->conectar();
		$consulta = "SELECT * FROM t_programa";
		$res = $c->prepare($consulta);
		$res->setFetchMode(PDO::FETCH_ASSOC);
		$res->execute();
		return $res->fetchAll();
	}
	public function mdlcrear($prog,$nom,$cod,$fecin,$fecfin){
		$db = new conexion();
		$c = $db ->conectar();
		$reg = "INSERT INTO t_formacion(FOR_PRO_ID,FOR_Nombre,FOR_Codigo,FOR_Fecha_Inicio,FOR_Fecha_Fin,FOR_Estado) VALUES (:prog,:nom,:cod,:ini,:fin,:est)";
		$res = $c -> prepare($reg);
		$est = $res -> execute(array("prog" => $prog,"nom" => $nom,"cod" => $cod,"ini" => $fecin,"fin" => $fecfin,"est" => 1));
		return $est;

	}
	public static function mdlvalidarformacion($cod){
		$db = new conexion();
		$c = $db -> Conectar();
		$consulta = "SELECT * FROM t_formacion WHERE FOR_Codigo = :c";
		$res = $c -> prepare($consulta);
		$res -> setFetchMode(PDO::FETCH_ASSOC);
		$res -> execute(array("c" => $cod));
		if($res->rowCount()>0){
			return 1;
		}else{
			return 0;
		}
	}
	public static function mdlbuscarformacion($cod){
		$db = new conexion();
		$c = $db->conectar();
		$consulta = "SELECT * FROM t_formacion WHERE FOR_Codigo LIKE ?";
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
		$consulta = "SELECT * FROM t_formacion WHERE FOR_ID = :id";
		$res = $c -> prepare($consulta);
		$res -> setFetchMode(PDO::FETCH_ASSOC);
		$res -> execute(array("id" => $id));
		return $res -> fetch();
	}
	public static function mdleditar($nom,$cod,$fecin,$fecfin,$id){
		$db = new conexion();
		$c = $db ->conectar();
		$qry = "UPDATE t_formacion SET FOR_Nombre = :nom,FOR_Codigo = :cod,FOR_Fecha_Inicio = :fecin,FOR_Fecha_Fin = :fecfin WHERE FOR_ID = :id";
		$res = $c -> prepare($qry);
		$est = $res -> execute(array("nom" => $nom,"cod" => $cod,"fecin" => $fecin,"fecfin" => $fecfin,"id" => $id));
		return $est;
	}
	public static function mdleliminar($id){
		$db = new conexion();
		$c = $db ->conectar();
		$qry = "DELETE FROM t_formacion WHERE FOR_ID = :id";
		$res = $c -> prepare($qry);
		$est = $res -> execute(array("id" => $id));
		return $est;
	}
}