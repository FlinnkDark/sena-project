<?php 

class actividades_controlador{
	public function frmRegistro(){
		require_once "View/actividades/frmRegistro.php";
	}
	
	public function frmCrear(){
		$datos = formacion_modelo::mdlListarPrograma();
		require_once "View/formacion/frmCrear.php";
	}
	public function crear(){
		$ent = formacion_modelo::mdlvalidarformacion($_POST['cod']);
		if($ent == 0){
			$res = formacion_modelo::mdlcrear($_POST['prog'],$_POST['nom'],$_POST['cod'],$_POST['fecin'],$_POST['fecfin']);
			if($res == 1){
				echo "Registro exitoso";
			}
		}else{
			echo "esta formacion ya esta registrada";
		}
	}
	public function buscarformacion(){
		$rst = formacion_modelo::mdlbuscarformacion($_POST['cod']);
		$tbl ='';
		$tbl =$tbl."<div class='container-fluid'>";
		$tbl = $tbl."<table class='table table-bordered'>";
		$tbl = $tbl."<tr class='info'>";
		$tbl = $tbl."<th>CODIGO</th>";
		$tbl = $tbl."<th>NOMBRE</th>";
		$tbl = $tbl."<th>INICIO</th>";
		$tbl = $tbl."<th>FIN</th>";
		$tbl = $tbl."<th>ESTADO</th>";
		$tbl = $tbl."<th></th>";
		$tbl = $tbl."<th></th>";
		$tbl = $tbl."</tr>";

		foreach ($rst as $value) {
		$tbl = $tbl."<tr>";
		$tbl = $tbl."<td>".$value['FOR_Codigo']."</td>";
		$tbl = $tbl."<td>".$value['FOR_Nombre']."</td>";
		$tbl = $tbl."<td>".$value['FOR_Fecha_Inicio']."</td>";
		$tbl = $tbl."<td>".$value['FOR_Fecha_Fin']."</td>";
		$tbl = $tbl."<td>".$value['FOR_Estado']."</td>";
		$tbl = $tbl."<td><a href='?controlador=formacion&accion=frmeditar&id=".$value['FOR_ID']."'>Editar</a></td>";
		$tbl = $tbl."<td><a href='?controlador=formacion&accion=eliminar&id=".$value['FOR_ID']."' onclick='return confirm(\"Desea Eliminar?\");'>Eliminar</a></td>";
		$tbl = $tbl."</tr>";
		}
		$tbl = $tbl."</table>";
		$tbl= $tbl."</div>";
		$datos= array("text" => $tbl);
		echo json_encode($datos); 

	}
	public function frmeditar(){
		$datos = formacion_modelo::mdlListarPrograma();
		$r = formacion_modelo::mdlbuscarxid($_REQUEST['id']);
		if(is_array($r))
			require_once "View/formacion/frmeditar.php";
		else
			header ("location: /APPSENA");
	}
	public function editar(){
		$ent = formacion_modelo::mdlvalidarformacion($_POST['cod']);
		if($ent == 0){
			$r = formacion_modelo::mdleditar($_POST['nom'],$_POST['cod'],$_POST['fecin'],$_POST['fecfin'],$_POST['id']);
			if($r == 1){
				$datos= array("text" => "Formulario editado","estado" => "success");
				echo json_encode($datos); 
			}
		}else{
				$datos= array("text" => "Error al editar","estado" => "danger");
				echo json_encode($datos); 
			}
	}
	public function eliminar(){
		$r = formacion_modelo::mdleliminar($_GET['id']);
		if($r > 0){
			echo "Programa eliminado";
		}else{
			echo "Error al eliminar una formacion";
		}
	}
}


?>