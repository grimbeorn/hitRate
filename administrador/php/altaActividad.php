<?php

require 'conexion.php';

$nombreActividad = $_POST['nombreActividad'];
$tipoActividad = $_POST['tipoActividad'];
$asesorIngenieria = $_POST['asesorIngenieria'];
$zona = $_POST['zona'];
$fechaDeAtencion = $_POST['fechaDeAtencion'];
$seguimiento = $_POST['seguimiento'];

$comprobacion = mysqli_query($conexionBd,"SELECT * FROM actividadingenieria WHERE nombreActividad='$nombreActividad'");
$registro = "INSERT INTO actividadingenieria (nombreActividad, tipoActividad, asesorIngenieria, zona, fechaDeAtencion, seguimiento) VALUES ('$nombreActividad','$tipoActividad','$asesorIngenieria','$zona','$fechaDeAtencion','$seguimiento')";

if(mysqli_num_rows($comprobacion)>0)
{
    echo 1;
}elseif(mysqli_query($conexionBd, $registro) > 0)
{
    echo 2;
}

mysqli_close($conexionBd);

?>