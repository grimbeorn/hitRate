<?php 

function busquedaDeDistr()
{
    require 'conexion.php';
    $query01 = "SELECT nombre FROM distribuidorespanelrey ";
    $result01 = mysqli_query($conexionBd, $query01);
    $query02 = "SELECT nombre FROM distribuidorespanelrey ";
    $result02 = mysqli_query($conexionBd, $query02);
    $listaDistribuidor = '  <div id="selectorDistr" name="selectorDistr">
                                <select id="c01" class="selectpicker" data-live-search="true">
                                <option>seleccionar distribuidor 01</option>';
    while($row01 = mysqli_fetch_assoc($result01))
    {
        $listaDistribuidor .= "     <option>$row01[nombre]</option>";
    }
    $listaDistribuidor.= '      </select><br>
                                <select id="c02" class="selectpicker" data-live-search="true">
                                    <option>seleccionar distribuidor 02</option>';
    while($row02 = mysqli_fetch_assoc($result02))
    {
        $listaDistribuidor .= "     <option>$row02[nombre]</option>";
    }
    $listaDistribuidor.= '      </select>
                            </div>';

    echo $listaDistribuidor;

    mysqli_close($conexionBd);
}

busquedaDeDistr();

?>