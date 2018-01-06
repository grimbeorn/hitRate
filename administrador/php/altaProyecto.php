<?php

require 'conexion.php';

$nombre = $_POST['nombre'];
$clasificacion = $_POST['clasificacion'];
$sistemaConstructivo = $_POST['sistemaConstructivo'];
$calle = $_POST['calle'];
$numeroExterior = $_POST['numeroExterior'];
$numeroInterior = $_POST['numeroInterior'];
$colonia = $_POST['colonia'];
$codigoPostal = $_POST['codigoPostal'];
$municipio = $_POST['municipio'];
$estado = $_POST['estado'];
$zonaFisicaProyecto = $_POST['zonaFisicaProyecto'];
$zonaQueAtiendeProyecto = $_POST['zonaQueAtiendeProyecto'];
$coordenadasDeObra = $_POST['coordenadasDeObra'];
$tipoEdificacion = $_POST['tipoEdificacion'];
$fuenteDeAlta = $_POST['fuenteDeAlta'];
$etapaProyecto = $_POST['etapaProyecto'];
$busquedaDespacho = $_POST['busquedaDespacho'];
$volumenEstimadoIngenieria = $_POST['volumenEstimadoIngenieria'];
$asesorIngenieria = $_POST['asesorIngenieria'];
$fechaAVentas = $_POST['fechaAVentas'];
$bitacoraSeguimientoIngenieria = $_POST['bitacoraSeguimientoIngenieria'];
$fechaRecepcionObraPorVentas = $_POST['fechaRecepcionObraPorVentas'];
$ejecutivoVentas = $_POST['ejecutivoVentas'];
$volumenEstimadoVentas = $_POST['volumenEstimadoVentas'];
$bitacoraSeguimientoVentas = $_POST['bitacoraSeguimientoVentas'];

$comprobacion = mysqli_query($conexionBd,"SELECT * FROM proyectos WHERE nombre='$nombre'");
$registro = "INSERT INTO proyectos (nombre, clasificacion, sistemaConstructivo, calle, numeroExterior, numeroInterior, colonia, codigoPostal, municipio, estado, zonaFisicaProyecto, zonaQueAtiendeProyecto, coordenadasDeObra, tipoEdificacion, fuenteDeAlta, etapaProyecto, despachoEncargado, volumenEstimadoIngenieria, asesorIngenieria, fechaAVentas, bitacoraSeguimientoIngenieria, fechaRecepcionObraPorVentas, ejecutivoVentas, volumenEstimadoVentas, bitacoraSeguimientoVentas) VALUES ('$nombre', '$clasificacion', '$sistemaConstructivo', '$calle', '$numeroExterior', '$numeroInterior', '$colonia', '$codigoPostal', '$municipio', '$estado', '$zonaFisicaProyecto', '$zonaQueAtiendeProyecto', '$coordenadasDeObra', '$tipoEdificacion', '$fuenteDeAlta', '$etapaProyecto', '$busquedaDespacho', '$volumenEstimadoIngenieria', '$asesorIngenieria', '$fechaAVentas', '$bitacoraSeguimientoIngenieria', '$fechaRecepcionObraPorVentas', '$ejecutivoVentas', '$volumenEstimadoVentas', '$bitacoraSeguimientoVentas')";

// if($clasificacion == 'A.Grande  - 5,001 a mas   hojas'){
// 	$mensaje = wordwrap($mensaje, 70, " ");
// 	mail('hernandomtz@gmail.com', 'Mi título', $mensaje);
// 	if(mysqli_num_rows($comprobacion)>0)
// 	{
// 	    echo 1;
// 	}elseif(mysqli_query($conexionBd, $registro) > 0)
// 	{
// 	    echo 2;
// 	}
// }
// else
// {
	if(mysqli_num_rows($comprobacion)>0)
	{
	    echo 1;
	}elseif(mysqli_query($conexionBd, $registro) > 0)
	{
	    echo 2;
	}
//}


mysqli_close($conexionBd);

?>