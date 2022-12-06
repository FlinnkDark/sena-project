<!DOCTYPE html>
<html lang="es">
<head>
     <title>Sistema Control De Actividades </title>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="shortcut icon" href="Resources\img\icon.jpg" type="image/x-icon">
     <link href="Resources/css/estilos.css" rel="stylesheet">
       <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="Resources/css/bootstrap.rtl.min.css">
</head>
<body>
  <header>
  <nav class="navbar navbar-expand-lg" style=" background-color: #8cc751;"> 
  <div class="container-fluid">
    <a class="navbar-brand" href="?controlador=inicio&accion=principal" style=" background-color: #8cc751; font-size: 25px; font-weight: bold;">Sistema de Control de Actividades</a>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"style=" background-color: #8cc751; font-size: 20px;font-weight: bold;">Mercaderistas</a>
        </li>
        
      </ul>
      
    </div>
  </div>
</nav>
      </header>
  <?php if (isset($_SESSION["usuario_id"])) { ?>
  <div>    
    <div>
        <nav class="navbar">
            <a>Bienvenido: <?php echo $_SESSION['nombre']; ?></label>  
            <?php if ($_SESSION["rol"] == "1") {?>
              <a class="enlace" href="?controlador=usuario&accion=frmCrear">Registrar Mercaderistas</a>
            <?php } else { ?>
            <a class="enlace" href="?controlador=actividades&accion=frmRegistro">Registrar Actividades </a>
            <?php } ?>
            <!-- <a class="enlace" href="frm_Observaciones.html">Agregar Observaciones</a> -->
            <a class="enlace" href="?controlador=inicio&accion=cerrar">Cerrar sesión</a>
        </nav>
    </div>
  </div>

  <?php }
  require_once "rutas.php";
  ?>
 <!-- Option 1: Bootstrap Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

</body>
</html>