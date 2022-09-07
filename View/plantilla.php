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
<!-- <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">APPSENA</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="?controlador=inicio&accion=index"><span class="glyphicon glyphicon-home"></span> Inicio </a></li>
        <?php
          // if(isset($_SESSION['USU_Rol'])){
            // if($_SESSION['USU_Rol']==1){ ?>
              <li><a href="?controlador=usuario&accion=index"><span class="glyphicon glyphicon-user"></span> Usuarios</a></li>
              <li><a href="?controlador=programa&accion=index"><span class="glyphicon glyphicon-asterisk"></span> Programas</a></li>
              <?php 
            // }
          // }
        ?>
        <li><a href="?controlador=formacion&accion=index"><span class="glyphicon glyphicon-th"></span> Formación</a></li>
      </ul>
      <?php //if(!isset($_SESSION['USU_ID'])){ ?>
      <ul class="nav navbar-nav navbar-right">      
        <li><a href="?controlador=inicio&accion=frmlogin"><span class="glyphicon glyphicon-log-in"></span>Iniciar Sesión</a></li>
      </ul>
      <?php //}else {?>
          <ul class="nav navbar-nav navbar-right">      
        <li><a href="?controlador=inicio&accion=cerrar"><span class="glyphicon glyphicon-log-in"></span>Cerrar Sesión</a></li>
      <?php //} ?>
    </div>
  </div>
</nav>  -->


		<?php
		require_once "rutas.php";
		?>

</body>
</html>