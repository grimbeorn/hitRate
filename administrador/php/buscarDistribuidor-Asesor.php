<?php 

function busquedaDeDist()
{
	require 'conexion.php';
	$query = "SELECT usuario FROM usuarios WHERE area='ingenieria' ";
	$result = mysqli_query($conexionBd, $query);
    $listaAsesores = '<option>seleccionar asesor</option>';
    while($row = mysqli_fetch_assoc($result))
    {
        $listaAsesores .= "<option>$row[usuario]</option>";
    }
    $listaAsesores.= "</select>";
    echo $listaAsesores;
    mysqli_close($conexionBd);
}

busquedaDeDist();

?>