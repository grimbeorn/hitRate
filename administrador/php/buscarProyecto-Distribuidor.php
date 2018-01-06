<?php 

function busquedaDeDistrib()
{
    require 'conexion.php';
    $query = "SELECT nombre FROM distribuidorespanelrey ";
    $result = mysqli_query($conexionBd, $query);
    $listaDistribuidor = '<select id="distribuidorCotizando" name="distribuidorCotizando" class="form-control">';
    $listaDistribuidor.= '<option>seleccionar distribuidor</option>';
    while($row = mysqli_fetch_assoc($result))
    {
        $listaDistribuidor .= "<option>$row[nombre]</option>";
    }
    $listaDistribuidor.= "</select>";
    echo $listaDistribuidor;
    mysqli_close($conexionBd);
}

busquedaDeDistrib();

?>