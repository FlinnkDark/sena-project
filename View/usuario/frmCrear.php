<div class="container"><br><br>
	<center><h1 class="title">Registrar Mercaderista</h1></center>
	<form class="form" action="?controlador=usuario&accion=crear" method="post">
		<label for="numdoc">Documento:</label>
		<input id="numdoc" name="numdoc" type="number" required>
		<label for="nom">Nombre Completo:</label>
		<input id="nom" name="nom" type="text" required>
		<label for="emp">Empresa:</label>
		<select id="emp" name="emp">
			<option value="Colanta">Colanta</option>
			<option value="Alqueria">Alqueria</option>
			<option value="Coca-Cola">Coca-Cola</option>
		</select><br><br>
		
		<input type="submit" value="Registrar">
	</form>
</div>