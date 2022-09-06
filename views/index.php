<!DOCTYPE <!DOCTYPE html>
<html lang="es">
<head>
     <title>Sistema Control De Actividades </title>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="shortcut icon" href="img/favicon-16x16.png" type="image/x-icon">
     <link href="recursos/css/estilos.css" rel="stylesheet">
     
</head>
<body>
    <header>
        <section class="textosheader">
            <h1>SISTEMA CONTROL DE ACTIVIDADES</h1>
            <H2>Mercaderistas</H2>
        </section>
        <div class="wave" style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #8f8f19;"></path></svg></div>
    </header>

    <main>
        <section class="contenedor sobre-nosotros">
            <nav>
                <form class="form" method="post" action="controlador/index.php?accion=ingresar" >
                    <h2 class="form_title">Inicio De Sesión</h2>
                    <div class="login-form">
                        <input type="text" name="NºDocumento" placeholder="NºDocumento" />
                        <input type="password" name="Contraseña"placeholder="Contraseña" />
                        <input type="submit" name="submit" value="Ingresar" />   
                    </div>
                </form>
            </nav>
        </section>
    </main>

</body>
</html>
