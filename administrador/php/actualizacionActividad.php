<?php

require 'conexion.php';

$nombreActividad = $_POST['nombreActividad'];
$tipoActividad = $_POST['tipoActividad'];
$asesorIngenieria = $_POST['asesorIngenieria'];
$zona = $_POST['zona'];
$fechaDeAtencion = $_POST['fechaDeAtencion'];
$seguimiento = $_POST['seguimiento'];

$id = mysqli_query($conexionBd, "SELECT idActividad FROM actividadingenieria WHERE nombreActividad = '$nombreActividad' ");
$id2 = mysqli_fetch_row($id);
$id3 = $id2[0];

$verifAutomat = mysqli_query($conexionBd, "SELECT * FROM actividadingenieria WHERE idActividad = '$id3' ");
$actAutomat = "UPDATE actividadingenieria SET nombreActividad='$nombreActividad', tipoActividad='$tipoActividad', asesorIngenieria='$asesorIngenieria', zona='$zona',fechaDeAtencion='$fechaDeAtencion', seguimiento='$seguimiento' WHERE idActividad = '$id3' ";

if(mysqli_num_rows($verifAutomat) > 0){
    $actAutomat = mysqli_query($conexionBd, $actAutomat);
    echo 1;
}else{
    echo 2;
}

mysqli_close($conexionBd);

?>