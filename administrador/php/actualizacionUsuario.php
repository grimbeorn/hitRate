<?php

require 'conexion.php';

//**************************ACCESO A BASE DE DATOS***************

$usuario = $_POST['nusuario'];
$nombreUsuario = $_POST['nombreUsuario'];
$apellidoPaterno = $_POST['apellidoPaterno'];
$apellidoMaterno = $_POST['apellidoMaterno'];
$contrasena = $_POST['contrasena'];
//$contrasena = sha1($_POST['contrasena']);
$zona = $_POST['zona'];
$area = $_POST['area'];
$privilegios = $_POST['privilegios']; 
$correo = $_POST['correoUsuario']; 

$id = mysqli_query($conexionBd, "SELECT id_usuario FROM usuarios WHERE usuario = '$usuario' ");
$id2 = mysqli_fetch_row($id);
$id3 = $id2[0];

$verifAutomat = mysqli_query($conexionBd, "SELECT * FROM usuarios WHERE id_usuario = '$id3' ");
$actAutomat = "UPDATE usuarios SET nombre='$nombreUsuario',apellidoPaterno='$apellidoPaterno',apellidoMaterno='$apellidoMaterno',contrasena='$contrasena',zona='$zona',area='$area',privilegios='$privilegios',correo='$correo' WHERE id_usuario = '$id3' ";

if(mysqli_num_rows($verifAutomat) > 0){
    $actAutomat = mysqli_query($conexionBd, $actAutomat);
    echo 1;
}else{
    echo 2;
}

mysqli_close($conexionBd);

?>