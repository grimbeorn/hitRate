<?php

require 'conexion.php';

//**************************ACCESO A BASE DE DATOS***************

$nombre = $_POST['nombre'];
$clasificacion = $_POST['clasificacion'];
$sistemaConstructivo = $_POST['sistemaConstructivo'];
$calle = $_POST['calle'];
$numeroExterior = $_POST['numeroExterior'];
$numeroInterior = $_POST['numeroInterior'];
$colonia = $_POST['colonia'];
$municipio = $_POST['municipio'];
$codigoPostal = $_POST['codigoPostal'];
$estado = $_POST['estado'];
$zonaFisicaProyecto = $_POST['zonaFisicaProyecto'];
$zonaQueAtiendeProyecto = $_POST['zonaQueAtiendeProyecto'];
$coordenadasDeObra = $_POST['coordenadasDeObra'];
$tipoEdificacion = $_POST['tipoEdificacion'];
$fuenteDeAlta = $_POST['fuenteDeAlta'];
$etapaProyecto = $_POST['etapaActualProyectoIng'];
$despachoEncargado = $_POST['busquedaDespacho'];
$volumenEstimadoIngenieria = $_POST['volumenEstimadoIngenieria'];
$asesorIngenieria = $_POST['asesorIngenieria'];
$fechaAVentas = $_POST['fechaAVentas'];

$bitacoraSeguimientoIngenieria = $_POST['bitacoraSeguimientoIngenieria'];
$bitacoraSeguimientoVentas = $_POST['bitacoraSeguimientoVentas'];
$notasSeguimientoADistribuidor = $_POST['notasSeguimientoADistribuidor'];
//$notasSeguimientoObra = $_POST['notasSeguimientoObra'];

$etapaActualProyectoIng = $_POST['etapaActualProyectoIng'];
$fechaRecepcionObraPorVentas = $_POST['fechaRecepcionObraPorVentas'];
$numeroDistribuidoresPart = $_POST['numeroDistribuidoresPart'];
$ejecutivoVentas = $_POST['ejecutivoVentas'];
$volumenEstimadoVentas = $_POST['volumenEstimadoVentas'];
$distribuidorCotizando = $_POST['distribuidorCotizando'];
$fechaAsignacionDistribuidor= $_POST['fechaAsignacionDistribuidor'];

//$precioPropuesto = $_POST['precioPropuesto'];
$fechaCotizacion = $_POST['fechaCotizacion'];
$veredicto = $_POST['veredicto'];
$fechaVeredicto = $_POST['fechaVeredicto'];
$etapaActualProyectoVtas = $_POST['etapaActualProyectoVtas'];
$materialRetirado = $_POST['materialRetirado'];
$fechaMaterialRetirado = $_POST['fechaMaterialRetirado'];

$id = mysqli_query($conexionBd, "SELECT idProyecto FROM proyectos WHERE nombre = '$nombre' ");
$id2 = mysqli_fetch_row($id);
$id3 = $id2[0];

$verifAutomat = mysqli_query($conexionBd, "SELECT * FROM proyectos WHERE idProyecto = '$id3' ");
$actAutomat = "UPDATE proyectos SET idProyecto = '$id3', nombre='$nombre', clasificacion='$clasificacion', sistemaConstructivo='$sistemaConstructivo', calle='$calle', numeroExterior='$numeroExterior', numeroInterior='$numeroInterior', colonia='$colonia', municipio='$municipio', codigoPostal='$codigoPostal', estado='$estado', zonaFisicaProyecto='$zonaFisicaProyecto', zonaQueAtiendeProyecto='$zonaQueAtiendeProyecto', coordenadasDeObra='$coordenadasDeObra', tipoEdificacion='$tipoEdificacion', fuenteDeAlta='$fuenteDeAlta', etapaProyecto='$etapaProyecto', despachoEncargado='$despachoEncargado', volumenEstimadoIngenieria='$volumenEstimadoIngenieria', asesorIngenieria='$asesorIngenieria', fechaAVentas='$fechaAVentas', bitacoraSeguimientoIngenieria='$bitacoraSeguimientoIngenieria', etapaActualProyectoIng='$etapaActualProyectoIng', fechaRecepcionObraPorVentas='$fechaRecepcionObraPorVentas', numeroDistribuidoresPart='$numeroDistribuidoresPart', ejecutivoVentas='$ejecutivoVentas', volumenEstimadoVentas='$volumenEstimadoVentas', bitacoraSeguimientoVentas='$bitacoraSeguimientoVentas', distribuidorCotizando='$distribuidorCotizando', fechaCotizacion='$fechaCotizacion', veredicto='$veredicto', fechaDeVeredicto='$fechaVeredicto', notasSeguimientoADistribuidor='$notasSeguimientoADistribuidor', etapaActualProyectoVtas='$etapaActualProyectoVtas', materialRetirado='$materialRetirado', fechaRetiro='$fechaMaterialRetirado', fechaAsignacionDistribuidor='$fechaAsignacionDistribuidor' WHERE idProyecto = '$id3' ";

if(mysqli_num_rows($verifAutomat) > 0){
    $actAutomat = mysqli_query($conexionBd, $actAutomat);
    echo 1;
}else{
    echo 2;
}

mysqli_close($conexionBd);

?>