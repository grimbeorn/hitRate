<?php 

function busquedaDeDistr()
{
	require 'conexion.php';
	$query = "SELECT usuario FROM usuarios WHERE area='ventas'";
	$result = mysqli_query($conexionBd, $query);
    $listaEjecutivos = "<option>seleccionar ejecutivo</option>";
    while($row = mysqli_fetch_assoc($result))
    {
        $listaEjecutivos .= "<option>$row[usuario]</option>";
    }
    $listaEjecutivos.= "</select>";
    echo $listaEjecutivos;
    mysqli_close($conexionBd);
}

busquedaDeDistr();

?>