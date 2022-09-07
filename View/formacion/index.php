<div class="panel panel-primary">
	<div class="panel-heading">Registrar Formacion</div>
		<div class="panel-body">
			<div class="col-sm-12">
				<?php
					if(isset($_SESSION['USU_Rol'])){
						if($_SESSION['USU_Rol']==1){?>
							<label class="">Registro de formacion</label></br>
							<a href="?controlador=formacion&accion=frmCrear">Crear formacion</a>
		          <?php }
		      		} ?>
			</div>
			<form id="frmfor" method="post" action="<?php echo URL; ?>/rutas.php?controlador=formacion&accion=buscarformacion">
			<div class="col-sm-12">
				<label class="cod">Busqueda de formacion</label></br>
				<input type="text" id="cod" name="cod" placeholder="Ingrese la formacion a buscar" onkeypress="return event.keyCode !=13;">
			</div>
			</form>
			<div id="resultado"></div>
		</div>
</div>