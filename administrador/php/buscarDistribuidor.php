<?php 

if(isset($_POST['busqueda'])) 
{
	busquedaDeDistribuidor();
} else {
	echo "error";
}

function busquedaDeDistribuidor()
{
	require 'conexion.php';
    $listaAsesores="";
    $listaEjecutivos="";
    $print = "";
    $print01 = "";
    $print02 = "";
    $print03 = "";
    $print04 = "";
    $print05 = "";

    $queryAsesor = "SELECT usuario FROM usuarios WHERE area='ingenieria' ";
    $resultAsesor = mysqli_query($conexionBd, $queryAsesor);
    $listaAsesores.= '<select name="asesorIngenieria" id="asesorIngenieria" class="form-control">';
    $listaAsesores.= '<option>seleccionar asesor</option>';
    while($rowAsesor = mysqli_fetch_assoc($resultAsesor))
    {
        $listaAsesores .= "<option>$rowAsesor[usuario]</option>";
    }
    $listaAsesores.= '</select><br><br>Ejecutivo de ventas encargado de dar seguimiento:';
    //echo $listaAsesores;

    $queryEjecutivo = "SELECT usuario FROM usuarios WHERE area='ventas'";
    $resultEjecutivo = mysqli_query($conexionBd, $queryEjecutivo);
    $listaEjecutivos.= '<select name="ejecutivoVentas" id="ejecutivoVentas" class="form-control">';
    $listaEjecutivos.= '<option>seleccionar ejecutivo</option>';
    while($rowEjecutivo = mysqli_fetch_assoc($resultEjecutivo))
    {
        $listaEjecutivos .= "<option>$rowEjecutivo[usuario]</option>";
    }
    $listaEjecutivos.= '</select>';
    //echo $listaEjecutivos;

	$search = mysqli_real_escape_string($conexionBd, $_POST['busqueda']);
	$query = "SELECT nombre, zona, tipo, calificacion, asesorIngenieria, ejecutivoVentas, calle, numeroExterior, numeroInterior, colonia, municipio, codigoPostal, estado, nombreContacto01, telefono01Contacto01, telefono02Contacto01, correoContacto01, nombreContacto02, telefono01Contacto02, telefono02Contacto02, correoContacto02, seguimientoActividad FROM distribuidorespanelrey WHERE nombre LIKE '%".$search."%' ";
	$resultado = mysqli_query($conexionBd, $query);

	if($_POST['busqueda'] == "")
	{
		$print01 = '<form id="fAltaDistribuidor"><legend>Distribuidor:</legend>
                        <fieldset class="form-group">
                            Nombre del distribuidor:
                            <input class="form-control" type="text" id="nombre" name="nombre" size="41">
                            Zona:
                            <select class="form-control" name="zona" id="zona">
                                <option>norEste</option>
                                <option>norOste</option>
                                <option>pacifico</option>
                                <option>bajio</option>
                                <option>centro</option>
                                <option>surEste</option>
                            </select>
                            Tipo de Distribuidor:
                            <select class="form-control" name="tipo" id="tipo">
                                <option>suministro</option>
                                <option>suministro y colocacion</option>
                            </select>
                            Calificacion:
                            <input class="form-control" type="text" name="calificacion" id="calificacion">
                            Asesor de Ingenieria encargado de dar seguimiento: ';
        $print02 = $listaAsesores;
        $print03 = 'Ejecutivo de Ventas encargado de dar seguimiento: <br>';
        $print04 = $listaEjecutivos;
        $print05 = 'calle:
                    <input class="form-control" type="text" name="calle" size=50 id="calle">
                    num ext:
                    <input class="form-control" type="text" name="numeroExterior" id="numeroExterior">
                    num int:
                    <input class="form-control" type="text" name="numeroInterior" id="numeroInterior">
                    colonia:
                    <input class="form-control" type="text" name="colonia" size=50 id="colonia">
                    cp:
                    <input class="form-control" type="text" name="codigoPostal" size=50 id="codigoPostal">
                    municipio / delegacion:
                    <input class="form-control" type="text" name="municipio" size=50 id="municipio">
                    Estado:
                    <select class="form-control" name="estado" id="estado">
                        <option></option>
                        <option>Aguascalientes</option><br>
                        <option>Baja California</option><br>
                        <option>Baja California Sur</option><br>
                        <option>Campeche</option><br>
                        <option>Chiapas</option><br>
                        <option>Chihuahua</option><br>
                        <option>Ciudad de Mexico</option><br>
                        <option>Coahuila</option><br>
                        <option>Colima</option><br>
                        <option>Durango</option><br>
                        <option>Estado de Mexico</option><br>
                        <option>Guanajuato</option><br>
                        <option>Guerrero</option><br>
                        <option>Hidalgo</option><br>
                        <option>Jalisco</option><br>
                        <option>Michoacan</option><br>
                        <option>Morelos</option><br>
                        <option>Nayarit</option><br>
                        <option>Nuevo Leon</option><br>
                        <option>Oaxaca</option><br>
                        <option>Puebla</option><br>
                        <option>Queretaro</option><br>
                        <option>Quintana Roo</option><br>
                        <option>San Luis Potosi</option><br>
                        <option>Sinaloa</option><br>
                        <option>Sonora</option><br>
                        <option>Tabasco</option><br>
                        <option>Tamaulipas</option><br>
                        <option>Tlaxcala</option><br>
                        <option>Veracruz</option><br>
                        <option>Yucatan</option><br>
                        <option>Zacatecas</option>
                    </select>
                </fieldset><br>
                <fieldset class="form-group"><legend>Contacto 01:</legend>
                    Nombre del Contacto:
                    <input class="form-control" type="text" name="nombreContacto01" id="nombreContacto01">
                    Teléfono 01:
                    <input class="form-control" type="text" name="telefono01Contacto01" id="telefono01Contacto01">
                    Teléfono02
                    <input class="form-control" type="text" name="telefono02Contacto01" id="telefono02Contacto01">
                    Correo:
                    <input class="form-control" type="text" name="correoContacto01" id="correoContacto01">
                </fieldset><br>
                <fieldset class="form-group"><legend>Contacto 02:</legend>
                    Nombre del Contacto:
                    <input class="form-control" type="text" name="nombreContacto02" id="nombreContacto02">
                    Teléfono 01:
                    <input class="form-control" type="text" name="telefono01Contacto02" id="telefono01Contacto02">
                    Teléfono02:
                    <input class="form-control" type="text" name="telefono02Contacto02" id="telefono02Contacto02">
                    Correo:
                    <input class="form-control" type="text" name="correoContacto02" id="correoContacto02">        
                </fieldset><br>
                <fieldset class="form-group"><legend>Bitácora de Seguimiento al Distribuidor:</legend>
                    <textarea class="form-control" rows="4" cols="50" name="seguimientoActividad" id="seguimientoActividad"></textarea>
                </fieldset>
            </form>';
	} 
	else
	{
		if (mysqli_num_rows($resultado) > 0 ) 
		{
			while ($row01 = mysqli_fetch_assoc($resultado))/*value='$row01[nombre]'*/
			{
                $print01 = "<form id='fAltaDistribuidor'><legend>Distribuidor:</legend>
                <fieldset class='form-group'>
                    Nombre del distribuidor:
                    <input class='form-control' type='text' id='nombre' name='nombre' size='41' value='$row01[nombre]' readonly>
                    Zona:
                    <select class='form-control' name='zona' id='zona'>
                        <option>$row01[zona]</option>
                        <option>norEste</option>
                        <option>norOste</option>
                        <option>pacifico</option>
                        <option>bajio</option>
                        <option>centro</option>
                        <option>surEste</option>
                    </select>
                    Tipo de Distribuidor:
                    <select class='form-control' name='tipo' id='tipo'>
                        <option>$row01[tipo]</option>
                        <option>suministro</option>
                        <option>suministro y colocacion</option>
                    </select>
                    Calificacion:
                    <input class='form-control' type='text' name='calificacion' id='calificacion' value='$row01[calificacion]'>
                    Asesor de Ingenieria encargado de dar seguimiento: ";
        $print02 = $listaAsesores;
        $print03 = "Ejecutivo de Ventas encargado de dar seguimiento: <br>";
        $print04 = "<br>".$listaEjecutivos;
        $print05 = "calle:
                    <input class='form-control' type='text' name='calle' size=50 id='calle' value='$row01[calle]'>
                    num ext:
                    <input class='form-control' type='text' name='numeroExterior' id='numeroExterior' value='$row01[numeroExterior]'>
                    num int:
                    <input class='form-control' type='text' name='numeroInterior' id='numeroInterior' value='$row01[numeroInterior]'>
                    colonia:
                    <input class='form-control' type='text' name='colonia' size=50 id='colonia' value='$row01[colonia]'>
                    cp:
                    <input class='form-control' type='text' name='codigoPostal' size=50 id='codigoPostal' value='$row01[codigoPostal]'>
                    municipio / delegacion:
                    <input class='form-control' type='text' name='municipio' size=50 id='municipio' value='$row01[municipio]'>
                    Estado:
                    <select class='form-control' name='estado' id='estado'>
                        <option>$row01[estado]</option>
                        <option>Aguascalientes</option><br>
                        <option>Baja California</option><br>
                        <option>Baja California Sur</option><br>
                        <option>Campeche</option><br>
                        <option>Chiapas</option><br>
                        <option>Chihuahua</option><br>
                        <option>Ciudad de Mexico</option><br>
                        <option>Coahuila</option><br>
                        <option>Colima</option><br>
                        <option>Durango</option><br>
                        <option>Estado de Mexico</option><br>
                        <option>Guanajuato</option><br>
                        <option>Guerrero</option><br>
                        <option>Hidalgo</option><br>
                        <option>Jalisco</option><br>
                        <option>Michoacan</option><br>
                        <option>Morelos</option><br>
                        <option>Nayarit</option><br>
                        <option>Nuevo Leon</option><br>
                        <option>Oaxaca</option><br>
                        <option>Puebla</option><br>
                        <option>Queretaro</option><br>
                        <option>Quintana Roo</option><br>
                        <option>San Luis Potosi</option><br>
                        <option>Sinaloa</option><br>
                        <option>Sonora</option><br>
                        <option>Tabasco</option><br>
                        <option>Tamaulipas</option><br>
                        <option>Tlaxcala</option><br>
                        <option>Veracruz</option><br>
                        <option>Yucatan</option><br>
                        <option>Zacatecas</option>
                    </select>
                </fieldset><br>
                <fieldset class='form-group'><legend>Contacto 01:</legend>
                    Nombre del Contacto:
                    <input class='form-control' type='text' name='nombreContacto01' id='nombreContacto01' value='$row01[nombreContacto01]'>
                    Teléfono 01:
                    <input class='form-control' type='text' name='telefono01Contacto01' id='telefono01Contacto01' value='$row01[telefono01Contacto01]'>
                    Teléfono02
                    <input class='form-control' type='text' name='telefono02Contacto01' id='telefono02Contacto01' value='$row01[telefono02Contacto01]'>
                    Correo:
                    <input class='form-control' type='text' name='correoContacto01' id='correoContacto01' value='$row01[correoContacto01]'>
                </fieldset><br>
                <fieldset class='form-group'><legend>Contacto 02:</legend>
                    Nombre del Contacto:
                    <input class='form-control' type='text' name='nombreContacto02' id='nombreContacto02' value='$row01[nombreContacto02]'>
                    Teléfono 01:
                    <input class='form-control' type='text' name='telefono01Contacto02' id='telefono01Contacto02' value='$row01[telefono01Contacto02]'>
                    Teléfono02:
                    <input class='form-control' type='text' name='telefono02Contacto02' id='telefono02Contacto02' value='$row01[telefono02Contacto02]'>
                    Correo:
                    <input class='form-control' type='text' name='correoContacto02' id='correoContacto02' value='$row01[correoContacto02]'>        
                </fieldset><br>
                <fieldset class='form-group'><legend>Bitácora de Seguimiento al Distribuidor:</legend>
                    <textarea class='form-control' rows='4' cols='50' name='seguimientoActividad' id='seguimientoActividad' value='$row01[seguimientoActividad]'></textarea>
                </fieldset>
            </form>";
	        }
	    } 
	    else 
	    {
        $print01 = '<form id="fAltaDistribuidor"><legend>Distribuidor:</legend>
                        <fieldset class="form-group">
                            Nombre del distribuidor: [ESTE DISTRIBUIDOR NO EXISTE]
                            <input class="form-control" type="text" id="nombre" name="nombre" size="41">
                            Zona:
                            <select class="form-control" name="zona" id="zona">
                                <option>norEste</option>
                                <option>norOste</option>
                                <option>pacifico</option>
                                <option>bajio</option>
                                <option>centro</option>
                                <option>surEste</option>
                            </select>
                            Tipo de Distribuidor:
                            <select class="form-control" name="tipo" id="tipo">
                                <option>suministro</option>
                                <option>suministro y colocacion</option>
                            </select>
                            Calificacion:
                            <input class="form-control" type="text" name="calificacion" id="calificacion">
                            Asesor de Ingenieria encargado de dar seguimiento: ';
        $print02 = $listaAsesores;
        $print03 = 'Ejecutivo de Ventas encargado de dar seguimiento: <br>';
        $print04 = $listaEjecutivos;
        $print05 = 'calle:
                    <input class="form-control" type="text" name="calle" size=50 id="calle">
                    num ext:
                    <input class="form-control" type="text" name="numeroExterior" id="numeroExterior">
                    num int:
                    <input class="form-control" type="text" name="numeroInterior" id="numeroInterior">
                    colonia:
                    <input class="form-control" type="text" name="colonia" size=50 id="colonia">
                    cp:
                    <input class="form-control" type="text" name="codigoPostal" size=50 id="codigoPostal">
                    municipio / delegacion:
                    <input class="form-control" type="text" name="municipio" size=50 id="municipio">
                    Estado:
                    <select class="form-control" name="estado" id="estado">
                        <option></option>
                        <option>Aguascalientes</option><br>
                        <option>Baja California</option><br>
                        <option>Baja California Sur</option><br>
                        <option>Campeche</option><br>
                        <option>Chiapas</option><br>
                        <option>Chihuahua</option><br>
                        <option>Ciudad de Mexico</option><br>
                        <option>Coahuila</option><br>
                        <option>Colima</option><br>
                        <option>Durango</option><br>
                        <option>Estado de Mexico</option><br>
                        <option>Guanajuato</option><br>
                        <option>Guerrero</option><br>
                        <option>Hidalgo</option><br>
                        <option>Jalisco</option><br>
                        <option>Michoacan</option><br>
                        <option>Morelos</option><br>
                        <option>Nayarit</option><br>
                        <option>Nuevo Leon</option><br>
                        <option>Oaxaca</option><br>
                        <option>Puebla</option><br>
                        <option>Queretaro</option><br>
                        <option>Quintana Roo</option><br>
                        <option>San Luis Potosi</option><br>
                        <option>Sinaloa</option><br>
                        <option>Sonora</option><br>
                        <option>Tabasco</option><br>
                        <option>Tamaulipas</option><br>
                        <option>Tlaxcala</option><br>
                        <option>Veracruz</option><br>
                        <option>Yucatan</option><br>
                        <option>Zacatecas</option>
                    </select>
                </fieldset><br>
                <fieldset class="form-group"><legend>Contacto 01:</legend>
                    Nombre del Contacto:
                    <input class="form-control" type="text" name="nombreContacto01" id="nombreContacto01">
                    Teléfono 01:
                    <input class="form-control" type="text" name="telefono01Contacto01" id="telefono01Contacto01">
                    Teléfono02
                    <input class="form-control" type="text" name="telefono02Contacto01" id="telefono02Contacto01">
                    Correo:
                    <input class="form-control" type="text" name="correoContacto01" id="correoContacto01">
                </fieldset><br>
                <fieldset class="form-group"><legend>Contacto 02:</legend>
                    Nombre del Contacto:
                    <input class="form-control" type="text" name="nombreContacto02" id="nombreContacto02">
                    Teléfono 01:
                    <input class="form-control" type="text" name="telefono01Contacto02" id="telefono01Contacto02">
                    Teléfono02:
                    <input class="form-control" type="text" name="telefono02Contacto02" id="telefono02Contacto02">
                    Correo:
                    <input class="form-control" type="text" name="correoContacto02" id="correoContacto02">        
                </fieldset><br>
                <fieldset class="form-group"><legend>Bitácora de Seguimiento al Distribuidor:</legend>
                    <textarea class="form-control" rows="4" cols="50" name="seguimientoActividad" id="seguimientoActividad"></textarea>
                </fieldset>
            </form>';
		}
	}
    $print = $print01.$print02.$print03.$print04.$print05;
	echo $print;
    mysqli_close($conexionBd);
}
?>