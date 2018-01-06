<?php

require 'conexion.php';

    $nusuario = $_POST['nusuario'];
    $nombreUsuario = $_POST['nombreUsuario'];
    $apellidoPaterno = $_POST['apellidoPaterno'];
    $apellidoMaterno = $_POST['apellidoMaterno'];
    $correo = $_POST['correoUsuario'];
    $contrasena = $_POST['contrasena'];
    //$contrasena = sha1($_POST['contrasena']);
    $zona = $_POST['zona'];
    $area = $_POST['area'];
    $privilegios = $_POST['privilegios'];    

    $comprobacion = mysqli_query($conexionBd,"SELECT * FROM usuarios WHERE usuario='$nusuario'");
    $registro = "INSERT INTO usuarios (usuario,nombre,apellidoPaterno,apellidoMaterno,correo,contrasena,zona,area,privilegios) VALUES ('$nusuario','$nombreUsuario','$apellidoPaterno','$apellidoMaterno','$correo','$contrasena','$zona','$area','$privilegios')";

if(mysqli_num_rows($comprobacion)>0)
{
    echo 1;
}elseif(mysqli_query($conexionBd,$registro) > 0)
{
    echo 2;
}

mysqli_close($conexionBd);


?>