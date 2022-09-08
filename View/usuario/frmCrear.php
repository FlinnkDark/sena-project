<div class="container">
	<h1 class="title">Registrar Mercaderista</h1>
	<form class="form" action="?controlador=usuario&accion=crear" method="post">
		<label for="numdoc">Documento:</label>
		<input id="numdoc" name="numdoc" type="number" required>
		<label for="nom">Nombre Completo:</label>
		<input id="nom" name="nom" type="text" required>
		<label for="emp">Empresa:</label>
		<input id="emp" name="emp" type="text" required>
		<input type="submit" value="Registrar">
	</form>
</div>