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

$comprobacion = mysqli_query($conexionBd,"SELECT * FROM distribuidorespanelrey WHERE nombre='$nombre'");
$registro = "INSERT INTO distribuidorespanelrey (nombre, zona, tipo, calificacion, asesorIngenieria, ejecutivoVentas, calle, numeroExterior, numeroInterior, colonia, municipio, codigoPostal, estado, nombreContacto01, telefono01Contacto01, telefono02Contacto01, correoContacto01, nombreContacto02, telefono01Contacto02, telefono02Contacto02, correoContacto02, seguimientoActividad) VALUES ('$nombre','$zona','$tipo','$calificacion','$asesorIngenieria','$ejecutivoVentas','$calle','$numeroExterior','$numeroInterior','$colonia','$municipio','$codigoPostal','$estado','$nombreContacto01','$telefono01Contacto01','$telefono02Contacto01','$correoContacto01','$nombreContacto02','$telefono01Contacto02','$telefono02Contacto02','$correoContacto02','$seguimientoActividad')";

if(mysqli_num_rows($comprobacion)>0)
{
    echo 1;
}elseif(mysqli_query($conexionBd,$registro) > 0)
{
    echo 2;
}

mysqli_close($conexionBd);


?>