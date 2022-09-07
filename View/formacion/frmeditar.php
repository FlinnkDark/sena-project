<?php if($_SESSION['USU_Rol'] == 1){ ?>
<div class="panel panel-primary">
			<div class="panel-heading">Registrar Formacion</div>
			<div class="panel-body">
				<div class="col-sm-4">
					<form id="frmeditfor" method="post" action="<?php echo URL; ?>/rutas.php?controlador=formacion&accion=editar" required>
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
						<input type="text" class="form-control" id="nom" name="nom" required value="<?php echo $r['FOR_Nombre'];?>" >
					</div>
					<div class="form-group">
						<label for="cod">Codigo de la formacion:</label>
						<input type="text" class="form-control" id="cod" name="cod" required value="<?php echo $r['FOR_Codigo'];?>">
					</div>
					<div class="form-group">
						<label for="fecin">Fecha de inicio:</label>
						<input type="date" class="form-control" id="fecin" name="fecin" required value="<?php echo $r['FOR_Fecha_Inicio'];?>">
					</div>
					<div class="form-group">
						<label for="fecfin">Fecha de finalizacion:</label>
						<input type="date" class="form-control" id="fecfin" name="fecfin" required value="<?php echo $r['FOR_Fecha_Fin'];?>" >
					</div>
					<input class="btn btn-info" type="submit" id="editar" name="editar" value="Editar formacion">
					<input type="hidden" name="id" value="<?php echo $r['FOR_ID'];?>">
					</form>
				</div>
			</div>
		</div>
<?php }else{
	header("Location: /APPSENA");
}
?>