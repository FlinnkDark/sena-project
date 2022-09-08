<div>
  <div class="container">
    <h1 class="title">Registro de actividades</h1>
    <div class="card">
      <form method="post" action="?controlador=actividades&accion=crear">
        <label for="doc">Documendo de identidad</label>
        <input id="doc" name="doc" type="number" required> 
        <br/>
        <label for="date">Fecha</label>
        <input id="date" name="date" type="date">
        <label for="act">Actividades Realizadas:</label>
        <input type="text" id="act" name="act" required>
        <input type="submit" value="Agregar actividad realizada">
      </form>
    </div>
  </div>
</div>