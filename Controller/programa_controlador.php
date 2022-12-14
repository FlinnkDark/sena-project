<?php 
class programa_controlador{

	public function index(){
		require_once "View/programa/index.php";
	} 
	public function frmCrear(){
		require_once "View/programa/frmCrear.php";
	}
	public function crear(){
		$ent = programa_modelo::mdlvalidarprograma($_POST['cod']);
		if($ent == 0){
			$res = programa_modelo::mdlcrear($_POST['nom'],$_POST['cod']);
			if($res == 1){
				echo "Registro exitoso";
			}
		}else{
			echo "Este usuario ya esta registrado";
		}
	}
	public function buscarprograma(){
		$rst = programa_modelo::mdlbuscarprogramas($_POST['cod']);
		$tbl ='';
		$tbl =$tbl."<div class='container-fluid'>";
		$tbl = $tbl."<table class='table table-bordered'>";
		$tbl = $tbl."<tr class='info'>";
		$tbl = $tbl."<th>CODIGO</th>";
		$tbl = $tbl."<th>NOMBRE</th>";
		$tbl = $tbl."<th>ESTADO</th>";
		$tbl = $tbl."<th></th>";
		$tbl = $tbl."<th></th>";
		$tbl = $tbl."</tr>";

		foreach ($rst as $value) {
		$tbl = $tbl."<tr>";
		$tbl = $tbl."<td>".$value['PRO_Codigo']."</td>";
		$tbl = $tbl."<td>".$value['PRO_Nombre']."</td>";
		$tbl = $tbl."<td>".$value['PRO_Estado']."</td>";
		$tbl = $tbl."<td><a href='?controlador=programa&accion=frmeditar&id=".$value['PRO_ID']."'>Editar</a></td>";
		$tbl = $tbl."<td><a href='?controlador=programa&accion=eliminar&id=".$value['PRO_ID']."' onclick='return confirm(\"Desea Eliminar?\");'>Eliminar</a></td>";
		$tbl = $tbl."</tr>";
		}
		$tbl = $tbl."</table>";
		$tbl= $tbl."</div>";
		$datos= array("text" => $tbl);
		echo json_encode($datos); 

	}
	public function frmeditar(){
		$r = programa_modelo::mdlbuscarxid($_REQUEST['id']);
		if(is_array($r))
			require_once "View/programa/frmeditar.php";
		else
			header ("location: /APPSENA");
	}
	public function editar(){
		$ent = programa_modelo::mdlvalidarprograma($_POST['cod']);
		if($ent == 0){
			$r = programa_modelo::mdleditar($_POST['nom'],$_POST['cod'],$_POST['id']);
			if($r == 1){
				$datos= array("text" => "Programa editado","estado" => "success");
				echo json_encode($datos); 
			}
		}else{
			$datos= array("text" => "Error al editar","estado" => "danger");
		echo json_encode($datos); 
		}
	}
	public function eliminar(){
		$r = programa_modelo::mdleliminar($_GET['id']);
		if($r > 0){
			echo "Programa eliminado";
		}else{
			echo "Error al eliminar un programa";
		}
	}
}
?>