<?php 

function busquedaDeDesp()
{
	require 'conexion.php';
	$query = "SELECT nombreDespacho FROM despachos ";
	$result = mysqli_query($conexionBd, $query);
    $listaDespachos = '<select id="busquedaDespacho" name="busquedaDespacho" class="form-control">';
    $listaDespachos.= '<option>seleccionar despacho</option>';
    while($row = mysqli_fetch_assoc($result))
    {
        $listaDespachos .= "<option>$row[nombreDespacho]</option>";
    }
    $listaDespachos.= "</select>";
    echo $listaDespachos;
    mysqli_close($conexionBd);
}

busquedaDeDesp();

?>