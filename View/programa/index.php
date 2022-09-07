<?php
if(isset($_SESSION['USU_Rol'])){
	if($_SESSION['USU_Rol']==1){?>
		<div class="panel panel-primary">
			<div class="panel-heading">Busqueda de programas</div>
			<div class="panel-body">
				<div class="col-sm-4">
					<a href="?controlador=programa&accion=frmCrear">Crear Programa</a>
					<form id="frmpro" method="post" action="<?php echo URL; ?>/rutas.php?controlador=programa&accion=buscarprograma">
					<div class="form-group">
						<label for="cod">Nombre del programa:</label>
						<input type="text" class="form-control" id="cod" name="cod" required placeholder="Ingrese el codigo del programa" onkeypress="return event.keyCode !=13;">
					</div>
					</form>
					<div id="resultado"></div>
				</div>
			</div>
		</div>
	<?php }else {
		echo "Debes ser administrador para esta seccion";
	}
}else{
	echo "Debes estar registrado y ser adminsitrador para esta seccion";
}
?>

