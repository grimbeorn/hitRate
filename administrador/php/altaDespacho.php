<?php

require 'conexion.php';

$nombreDespacho = $_POST['nombre'];
$giroDespacho = $_POST['giroDespacho'];
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
$notas = $_POST['notas'];

$comprobacion = mysqli_query($conexionBd,"SELECT * FROM despachos WHERE nombreDespacho='$nombreDespacho'");
$registro = "INSERT INTO despachos (nombreDespacho, giroDespacho, calle, numeroExterior, numeroInterior, colonia, municipio, codigoPostal, estado, nombreContacto01, telefono01Contacto01, telefono02Contacto01, correoContacto01, nombreContacto02, telefono01Contacto02, telefono02Contacto02, correoContacto02, notas) VALUES ('$nombreDespacho','$giroDespacho','$calle','$numeroExterior','$numeroInterior','$colonia','$municipio','$codigoPostal','$estado','$nombreContacto01','$telefono01Contacto01','$telefono02Contacto01','$correoContacto01','$nombreContacto02','$telefono01Contacto02','$telefono02Contacto02','$correoContacto02','$notas')";

if(mysqli_num_rows($comprobacion)>0)
{
    echo 1;
}elseif(mysqli_query($conexionBd, $registro) > 0)
{
    echo 2;
}

mysqli_close($conexionBd);

?>