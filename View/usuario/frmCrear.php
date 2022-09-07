<div class="Panel panel-primary">
	<div class="panel-heading">Registrarse</div>
	<div class="col-sm-4">
		<form method="post" action="?controlador=usuario&accion=crear" required>
		<div class="form-group">
			<label for="nom">Nombre:</label>
			<input type="text" class="form-control" id="nom" name="nom" required>
		</div>
		<div class="form-group">
			<label for="tdp">Tipo de documento</label><br />
			<select class="form-group" id="tdp" name="tdp">
				<option value="TI">TI</option>
				<option value="CC">CC</option>
				<option value="CE">CE</option>
			</select>
		</div>
		<div class="form-group">
			<label for="email">Correo electronico:</label>
			<input type="email" class="form-control" id="email" name="email" required>
		</div>
	<input class="btn btn-info" type="submit" id="registrar" name="registrar" value="Registrar">
	</div>
	<div class="col-sm-4">
		<div class="form-group">
			<label for="ape">Apellido:</label>
			<input type="text" class="form-control" id="ape" name="ape" required>
		</div>
		<div class="form-group">
			<label for="numdoc">Numero Documento:</label>
			<input type="text" class="form-control" id="numdoc" name="numdoc" required>
		</div>
		<div class="form-group">
			<label for="nac">Fecha nacimiento:</label>
			<input type="date" class="form-control" id="nac" name="nac" required>
		</div>
	</form>
	</div>
	
</div>