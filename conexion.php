<?php
$conexion = mysqli_connect('localhost','root','','sistema control de actividades')
or die(mysqli_error($mysqli));

insertar($conexion);

function insertar($conexion){
    $NºDocumento = $_POST['NºDocumento'];
    $Contraseña = $_POST['Contraseña'];


    $consulta = "INSERT INTO validación de usuario(NºDocumento,Contraseña) 
    VALUES ('$NºDocumento','$Contraseña)";
    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);
}

    function insertar($conexion){
        $Documento = $_POST['Documento'];
        $NombreCompleto = $_POST['NombreCompleto'];
        $Empresa = $_POST['Empresa'];
    
    
        $consulta ="INSERT INTO registro de mercaderitas(Documento,Nombre Completo,Empresa) 
        VALUES ('$Documento','$NombreCompleto,'$Empresa')";
        mysqli_query($conexion, $consulta);
        mysqli_close($conexion);
}
?>