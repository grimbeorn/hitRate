<?php 

require 'conexion.php';

// año actual
$anio = date("Y");
// mes actual
$mes = date("n");

/* fecha de RECEPCIÓN*/
$sql01 = "SELECT fechaRecepcionObraPorVentas FROM proyectos WHERE EXTRACT(year FROM fechaRecepcionObraPorVentas)='$anio' AND EXTRACT(month FROM fechaRecepcionObraPorVentas)='$mes' ";
$result01 = mysqli_query($conexionBd,$sql01);
$numero01 = mysqli_num_rows($result01);
/* fecha de ASIGNACIÓN*/
$sql02 = "SELECT fechaAsignacionDistribuidor FROM proyectos WHERE EXTRACT(year FROM fechaAsignacionDistribuidor)='$anio' AND EXTRACT(month FROM fechaAsignacionDistribuidor)='$mes' ";
$result02 = mysqli_query($conexionBd,$sql02);
$numero02 = mysqli_num_rows($result02);
/* fecha de COTIZACIÓN*/
$sql03 = "SELECT fechaCotizacion FROM proyectos WHERE EXTRACT(year FROM fechaCotizacion)='$anio' AND EXTRACT(month FROM fechaCotizacion)='$mes' ";
$result03 = mysqli_query($conexionBd,$sql03);
$numero03 = mysqli_num_rows($result03);
/* fecha de VEREDICTO-GANADAS*/
$sql04 = "SELECT fechaDeVeredicto FROM proyectos WHERE EXTRACT(year FROM fechaDeVeredicto)='$anio' AND EXTRACT(month FROM fechaDeVeredicto)='$mes' ";
$result04 = mysqli_query($conexionBd,$sql04);
$numero04 = mysqli_num_rows($result04);

echo "<div class='row' id='indicadores'>
                <div class='col-md-3' id='obrasRecibidas'>
                    <h2>obras recibidas</h2>
                    <h3>$numero01</h3>
                </div>
                <div class='col-md-3' id='obrasAsignadas'>
                    <h2>obras asignadas</h2>
                    <h3>$numero02</h3>
                </div>
                <div class='col-md-3' id='obrasCotizadas'>
                    <h2>obras cotizadas</h2>
                    <h3>$numero03</h3>
                </div>
                <div class='col-md-3' id='obrasGanadas'> 
                    <h2>obras ganadas</h2>
                    <h3>$numero04</h3>
                </div>
            </div>";

?>