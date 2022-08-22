<?php
include("conexion.php");
$con=conectar();

$sql="SELECT * FROM registro de mercaderistas";
$query=mysqli_query($com,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE <!DOCTYPE html>
<html lang="es">
<head>
     <title>Sistema Control De Actividades </title>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="shortcut icon" href="img/favicon-16x16.png" type="image/x-icon">
     <link href="estilos.css" rel="stylesheet">
     
</head>

<body>
   <header>
    <section class="textosheader">
        <h1>SISTEMA CONTROL DE ACTIVIDADES</h1>
        <H2>Mercaderistas</H2>
    </section>
    <div class="wave" style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #8f8f19;"></path></svg></div>
</body>

    <body>
    <header>
        <nav class="navbar">
          <a class="enlace" href="frm_registrar mercaderistas.html">Registar Mercaderistas</a>  
            <a class="enlace" href="frm_registro_de_actividades.html">Registrar Actividades </a>
              <a class="enlace" href="frm_Observaciones.html">Agregar Observaciones</a>
 
          </nav>
    </header>
</body>


<body>
    <div class="container">
      <h1 class="title">Registrar Mercaderista</h1>
      <div class="card">
        <form action="conexion.php" method="post">
        <label for="pass">Documento:</label>
        <input id="pass" name="pass" type="pass" value="">
        <label for="pass">Nombre Completo:</label>
        <input id="pass" name="pass" type="pass" value="">
        <label for="pass">Empresa:</label>
        <input id="pass" name="pass" type="pass" value="">
        <a input type="button" class="btn" href="principal.html">Registrar</a>
      </div>
    </div>   
  </body>
  </html>