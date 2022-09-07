<?php
if(isset($_SESSION['USU_Rol'])){
	if($_SESSION['USU_Rol']==1){?>
		<div class="panel panel-primary">
			<div class="panel-heading">Registrar Formacion</div>
			<div class="panel-body">
				<div class="col-sm-4">
					<form id="frmeditfor" method="post" action="?controlador=formacion&accion=crear" required>
					<div class="form-group">
						<label for="prog">Programa</label>
						<select class="form-control" id="prog" name="prog">
							<?php
								foreach ($datos as $v){
									echo '<option value="'.$v['PRO_ID'].'">'.$v['PRO_Nombre'].'</option>';
								}?>
						</select>
					<div class="form-group">
						<label for="nom">Nombre de la formacion:</label>
						<input type="text" class="form-control" id="nom" name="nom" required >
					</div>
					<div class="form-group">
						<label for="cod">Codigo de la formacion:</label>
						<input type="text" class="form-control" id="cod" name="cod" required >
					</div>
					<div class="form-group">
						<label for="fecin">Fecha de inicio:</label>
						<input type="date" class="form-control" id="fecin" name="fecin" required >
					</div>
					<div class="form-group">
						<label for="fecfin">Fecha de finalizacion:</label>
						<input type="date" class="form-control" id="fecfin" name="fecfin" required >
					</div>
					<input class="btn btn-info" type="submit" id="formacion" name="Crear" value="Crear formacion">
					</form>
				</div>
			</div>
		</div>
	<?php }else {
		echo "Debes ser administrador para esta seccion";
	}
}else{
	echo "Debes estar registrado para esta seccion";
}
?>