<?php

require 'conexion.php';

//**************************ACCESO A BASE DE DATOS***************

// $idProyecto = $_POST['idProyecto'];
$nombre = $_POST['nombre'];
$despachoEncargado = $_POST['despachoEncargado'];
$asesorIngenieria = $_POST['asesorIngenieria'];
$bitacoraSeguimientoIngenieria = $_POST['bitacoraSeguimientoIngenieria'];
$ejecutivoVentas = $_POST['ejecutivoVentas'];
$bitacoraSeguimientoVentas = $_POST['bitacoraSeguimientoVentas'];

$id = mysqli_query($conexionBd, "SELECT idProyecto FROM proyectos WHERE nombre = '$nombre' ");
$id2 = mysqli_fetch_row($id);
$id3 = $id2[0];

$verifAutomat = mysqli_query($conexionBd, "SELECT * FROM proyectos WHERE idProyecto = '$id3' ");
$actAutomat = "UPDATE proyectos SET bitacoraSeguimientoIngenieria='$bitacoraSeguimientoIngenieria', bitacoraSeguimientoVentas='$bitacoraSeguimientoVentas' WHERE idProyecto = '$id3' ";

if(mysqli_num_rows($verifAutomat) > 0){
    $actAutomat = mysqli_query($conexionBd, $actAutomat);
    echo 1;
}else{
    echo 2;
}

mysqli_close($conexionBd);

?>