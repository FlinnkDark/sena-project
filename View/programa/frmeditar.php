<?php if($_SESSION['USU_Rol'] == 1){ ?>
<div class="Panel panel-primary">
	<div class="panel-heading">Edicion de proramas</div>
	<div class="col-sm-4">
		<form id="frmeditpro" method="post" action="<?php echo URL; ?>/rutas.php?controlador=programa&accion=editar" required>
		<div class="form-group">
			<label for="nom">Nombre del programa:</label>
			<input type="text" class="form-control" id="nom" name="nom" required value="<?php echo $r['PRO_Nombre'];?>">
		</div>
		<div class="form-group">
			<label for="cod">Codigo de programa:</label><br />
			<input type="text" class="form-control" id="cod" name="cod" value="<?php echo $r['PRO_Codigo'];?>">
		</div>
	<input class="btn btn-info" type="submit" id="editar" name="editar" value="Editar programa">
	<input type="hidden" name="id" value="<?php echo $r['PRO_ID'];?>">
	</form>
</div>
<?php }else{
	header("Location: /APPSENA");
}
?>