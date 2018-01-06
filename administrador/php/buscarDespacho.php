<?php 

if(isset($_POST['busqueda'])) 
{
	busquedaDeDespacho();
} else {
	echo "no se recibió el valor buscado";
}

function busquedaDeDespacho()
{
	require 'conexion.php';
	$search = mysqli_real_escape_string($conexionBd, $_POST['busqueda']);
	$query = "SELECT nombreDespacho, giroDespacho, calle, numeroExterior, numeroInterior, colonia, municipio, codigoPostal, estado, nombreContacto01, telefono01Contacto01, telefono02Contacto01, correoContacto01, nombreContacto02, telefono01Contacto02, telefono02Contacto02, correoContacto02, notas  FROM despachos WHERE nombreDespacho LIKE '%".$search."%' ";
	$resultado = mysqli_query($conexionBd, $query);

	if($_POST['busqueda'] == "")
	{
		echo 
			'<form id="formActDespacho">       
                Nombre del despacho:
                <input class="form-control" type="text" id="nombre" name="nombre">
                calle:
                <input class="form-control" type="text" id="calle" name="calle" size=50>
                num ext:
                <input class="form-control" type="text" id="numeroExterior" name="numeroExterior">
                num int:
                <input class="form-control" type="text" id="numeroInterior" name="numeroInterior">
                colonia:
                <input class="form-control" type="text" id="colonia" size=50 name="colonia">
                cp:
                <input class="form-control" type="text" id="codigoPostal" name="codigoPostal" size=50>
                municipio / delegacion:
                <input class="form-control" type="text" id="municipio" name="municipio" size=50>
                Estado:
                <select class="form-control" id="estado" name="estado">
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
                Giro del despacho:
                <select class="form-control" id="giroDespacho" name="giroDespacho">
                  <option></option>
                  <option>despacho de arquitectura</option><br>
                  <option>constructor</option><br>
                  <option>contratista</option><br>
                  <option>instalador</option><br>
                  <option>project manager</option><br>
                  <option>supervision de obra</option><br>
                  <option>desarrollador</option><br>
                  <option>inversionista</option><br>
                  <option>otros / varios</option>
                </select><br>
                <legend>Contacto 01:</legend>
                Nombre del Contacto:
                <input class="form-control" type="text" id="nombreContacto01" name="nombreContacto01">
                Teléfono 01:
                <input class="form-control" type="text" id="telefono01Contacto01" name="telefono01Contacto01">
                Teléfono02:
                <input class="form-control" type="text" id="telefono02Contacto01" name="telefono02Contacto01">
                Correo:
                <input class="form-control" type="email" id="correoContacto01" name="correoContacto01"><br>
                <legend>Contacto 02:</legend>
                Nombre del Contacto:
                <input class="form-control" type="text" id="nombreContacto02" name="nombreContacto02">
                Teléfono 01:
                <input class="form-control" type="text" id="telefono01Contacto02" name="telefono01Contacto02">
                Teléfono02:
                <input class="form-control" type="text" id="telefono02Contacto02" name="telefono02Contacto02">
                Correo:
                <input class="form-control" type="email" id="correoContacto02" name="correoContacto02"><br>
                <legend>Notas:</legend>
                <textarea class="form-control" rows="4" id="notas" name="notas" cols="50"></textarea>
            </form>';
	} 
	else
	{
		if (mysqli_num_rows($resultado) > 0 ) 
		{
			while ($row = mysqli_fetch_assoc($resultado))/*value='$row[nombreDespacho]'*/
			{
				echo 
		"<form id='formActDespacho'>       
                Nombre del despacho:
                <input class='form-control' type='text' id='nombre' name='nombre' value='$row[nombreDespacho]' readonly>
                calle:
                <input class='form-control' type='text' id='calle' name='calle' value='$row[calle]'>
                num ext:
                <input class='form-control' type='text' id='numeroExterior' name='numeroExterior' value='$row[numeroExterior]'>
                num int:
                <input class='form-control' type='text' id='numeroInterior' name='numeroInterior' value='$row[numeroInterior]'>
                colonia:
                <input class='form-control' type='text' id='colonia' size=50 name='colonia' value='$row[colonia]'>
                cp:
                <input class='form-control' type='text' id='codigoPostal' name='codigoPostal' value='$row[codigoPostal]'>
                municipio / delegacion:
                <input class='form-control' type='text' id='municipio' name='municipio' value='$row[municipio]'>
                Estado:
                <select class='form-control' id='estado' name='estado' value='$row[estado]'>
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
                Giro del despacho:
                <select class='form-control' id='giroDespacho' name='giroDespacho' value='$row[giroDespacho]'>
                  <option></option>
                  <option>despacho de arquitectura</option><br>
                  <option>constructor</option><br>
                  <option>contratista</option><br>
                  <option>instalador</option><br>
                  <option>project manager</option><br>
                  <option>supervision de obra</option><br>
                  <option>desarrollador</option><br>
                  <option>inversionista</option><br>
                  <option>otros / varios</option>
                </select><br>
                <legend>Contacto 01:</legend>
                Nombre del Contacto:
                <input class='form-control' type='text' id='nombreContacto01' name='nombreContacto01' value='$row[nombreContacto01]'>
                Teléfono 01:
                <input class='form-control' type='text' id='telefono01Contacto01' name='telefono01Contacto01' value='$row[telefono01Contacto01]'>
                Teléfono02:
                <input class='form-control' type='text' id='telefono02Contacto01' name='telefono02Contacto01' value='$row[telefono02Contacto01]'>
                Correo:
                <input class='form-control' type='email' id='correoContacto01' name='correoContacto01' value='$row[correoContacto01]'><br>
                <legend>Contacto 02:</legend>
                Nombre del Contacto:
                <input class='form-control' type='text' id='nombreContacto02' name='nombreContacto02' value='$row[nombreContacto02]'>
                Teléfono 01:
                <input class='form-control' type='text' id='telefono01Contacto02' name='telefono01Contacto02' value='$row[telefono01Contacto02]'>
                Teléfono02:
                <input class='form-control' type='text' id='telefono02Contacto02' name='telefono02Contacto02' value='$row[telefono02Contacto02]'>
                Correo:
                <input class='form-control' type='email' id='correoContacto02' name='correoContacto02' value='$row[correoContacto02]'><br>
                <legend>Notas:</legend>
                <textarea class='form-control' rows='4' id='notas' name='notas' cols='50' value='$row[notas]'></textarea>
            </form>";
	        }
	    } 
	    else 
	    {
	    	echo 
			'<form id="formActDespacho">       
                Nombre del despacho: [ESTE DESPACHO NO EXISTE]
                <input class="form-control" type="text" id="nombre" name="nombre">
                calle:
                <input class="form-control" type="text" id="calle" name="calle" size=50>
                num ext:
                <input class="form-control" type="text" id="numeroExterior" name="numeroExterior">
                num int:
                <input class="form-control" type="text" id="numeroInterior" name="numeroInterior">
                colonia:
                <input class="form-control" type="text" id="colonia" size=50 name="colonia">
                cp:
                <input class="form-control" type="text" id="codigoPostal" name="codigoPostal" size=50>
                municipio / delegacion:
                <input class="form-control" type="text" id="municipio" name="municipio" size=50>
                Estado:
                <select class="form-control" id="estado" name="estado">
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
                Giro del despacho:
                <select class="form-control" id="giroDespacho" name="giroDespacho">
                  <option></option>
                  <option>despacho de arquitectura</option><br>
                  <option>constructor</option><br>
                  <option>contratista</option><br>
                  <option>instalador</option><br>
                  <option>project manager</option><br>
                  <option>supervision de obra</option><br>
                  <option>desarrollador</option><br>
                  <option>inversionista</option><br>
                  <option>otros / varios</option>
                </select><br>
                <legend>Contacto 01:</legend>
                Nombre del Contacto:
                <input class="form-control" type="text" id="nombreContacto01" name="nombreContacto01">
                Teléfono 01:
                <input class="form-control" type="text" id="telefono01Contacto01" name="telefono01Contacto01">
                Teléfono02:
                <input class="form-control" type="text" id="telefono02Contacto01" name="telefono02Contacto01">
                Correo:
                <input class="form-control" type="email" id="correoContacto01" name="correoContacto01"><br>
                <legend>Contacto 02:</legend>
                Nombre del Contacto:
                <input class="form-control" type="text" id="nombreContacto02" name="nombreContacto02">
                Teléfono 01:
                <input class="form-control" type="text" id="telefono01Contacto02" name="telefono01Contacto02">
                Teléfono02:
                <input class="form-control" type="text" id="telefono02Contacto02" name="telefono02Contacto02">
                Correo:
                <input class="form-control" type="email" id="correoContacto02" name="correoContacto02"><br>
                <legend>Notas:</legend>
                <textarea class="form-control" rows="4" id="notas" name="notas" cols="50"></textarea>
            </form>';
		}
	}
	mysqli_close($conexionBd);
}

?>