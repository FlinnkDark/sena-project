<?php
class conexion{
	private $conn;
	public function __construct(){
		try{//root , "",
			$this->conn = new PDO('mysql:host=localhost;dbname=sistema_control_de_actividades','root','');
			$this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}
	public function conectar(){
		if($this->conn instanceof PDO){
			return $this->conn;
		}
	}
}

?>