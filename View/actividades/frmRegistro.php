<div class="container"><br><br>
    <center><h1 class="title">Registro de actividades</h1></center>
    <form class="form" method="post" action="?controlador=actividades&accion=crear">
      <label for="doc">Documento de identidad:</label>
      <input id="doc" name="doc" type="number" required>
      <label for="date">Fecha:</label>
      <input id="date" name="date" type="date" required>
      <label for="act">Actividades Realizadas:</label>
      <input id="act" name="act" type="text" required> <br> <br>
      <input type="submit" value="Agregar actividad realizada">
    </form>
</div>