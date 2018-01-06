<?php

require 'conexion.php';

$nombre = $_POST['nombre'];
$zona = $_POST['zona'];
$tipo = $_POST['tipo'];
$calificacion = $_POST['calificacion'];
$asesorIngenieria = $_POST['asesorIngenieria'];
$ejecutivoVentas = $_POST['ejecutivoVentas'];
$calle = $_POST['calle'];
$numeroExterior = $_POST['numeroExterior'];
$numeroInterior = $_POST['numeroInterior'];
$colonia = $_POST['colonia'];
$municipio = $_POST['municipio'];
$codigoPostal = $_POST['codigoPostal'];
$estado = $_POST['estado'];
$nombreContacto01 = $_POST['nombreContacto01'];
$telefono01Contacto01 = $_POST['telefono01Contacto01'];
$telefono02Contacto01 = $_POST['telefono02Contacto01'];
$correoContacto01 = $_POST['correoContacto01'];
$nombreContacto02 = $_POST['nombreContacto02'];
$telefono01Contacto02 = $_POST['telefono01Contacto02'];
$telefono02Contacto02 = $_POST['telefono02Contacto02'];
$correoContacto02 = $_POST['correoContacto02'];
$seguimientoActividad = $_POST['seguimientoActividad'];

$id = mysqli_query($conexionBd, "SELECT idDistribuidor FROM distribuidorespanelrey WHERE nombre = '$nombre' ");
$id2 = mysqli_fetch_row($id);
$id3 = $id2[0];

$verifAutomat = mysqli_query($conexionBd, "SELECT * FROM distribuidorespanelrey WHERE idDistribuidor = '$id3' ");
$actAutomat = "UPDATE distribuidorespanelrey SET nombre='$nombre', zona='$zona', tipo='$tipo', calificacion='$calificacion', asesorIngenieria='$asesorIngenieria', ejecutivoVentas='$ejecutivoVentas', calle='$calle',numeroExterior='$numeroExterior',numeroInterior='$numeroInterior',colonia='$colonia',municipio='$municipio',codigoPostal='$codigoPostal',estado='$estado',nombreContacto01='$nombreContacto01',telefono01Contacto01='$telefono01Contacto01',telefono02Contacto01='$telefono02Contacto01',correoContacto01='$correoContacto01',nombreContacto02='$nombreContacto02',telefono01Contacto02='$telefono01Contacto02',telefono02Contacto02='$telefono02Contacto02',correoContacto02='$correoContacto02', seguimientoActividad='$seguimientoActividad' WHERE idDistribuidor = '$id3' ";

if(mysqli_num_rows($verifAutomat) > 0){
    $actAutomat = mysqli_query($conexionBd, $actAutomat);
    echo 1;
}else{
    echo 2;
}

mysqli_close($conexionBd);

?>