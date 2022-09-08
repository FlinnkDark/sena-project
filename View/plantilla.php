<!DOCTYPE html>
<html lang="es">
<head>
     <title>Sistema Control De Actividades </title>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="shortcut icon" href="img/favicon-16x16.png" type="image/x-icon">
     <link href="Resources/css/estilos.css" rel="stylesheet">
</head>
<body>
  <header>
      <section class="textosheader">
          <h1>SISTEMA CONTROL DE ACTIVIDADES</h1>
          <H2>Mercaderistas</H2>
      </section>
      <div class="wave" style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #8f8f19;"></path></svg></div>
  </header>
  <?php if (isset($_SESSION["usuario_id"])) { ?>
  <div>    
    <div>
        <nav class="navbar">
            <a>Bienvenido: <?php echo $_SESSION['nombre']; ?></label>  
            <a class="enlace" href="?controlador=usuario&accion=frmCrear">Registrar Mercaderistas</a>  
            <a class="enlace" href="?controlador=actividades&accion=frmRegistro">Registrar Actividades </a>
            <a class="enlace" href="frm_Observaciones.html">Agregar Observaciones</a>
            <a class="enlace" href="?controlador=inicio&accion=cerrar">Cerrar sesión</a>
        </nav>
    </div>
  </div>

  <?php }
  require_once "rutas.php";
  ?>

</body>
</html>