<?php if($_SESSION['USU_Rol'] == 1){ ?>
<div class="Panel panel-primary">
	<div class="panel-heading">Creacion de proramas</div>
	<div class="col-sm-4">
		<form method="post" action="?controlador=programa&accion=crear" required>
		<div class="form-group">
			<label for="nom">Nombre del programa:</label>
			<input type="text" class="form-control" id="nom" name="nom" required>
		</div>
		<div class="form-group">
			<label for="cod">Codigo de programa:</label><br />
			<input type="text" class="form-control" id="cod" name="cod">
		</div>
	<input class="btn btn-info" type="submit" id="programa" name="Crear" value="Crear programa">
	</form>
</div>
<?php }else{
	header("Location: /APPSENA");
}
?>