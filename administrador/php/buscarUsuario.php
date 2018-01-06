<?php 

if(isset($_POST['busqueda'])) 
{
	busquedaDeUsuario();
} else {
	echo "no se recibió el valor buscado";
}

// funciones //
function busquedaDeUsuario()
{
	require 'conexion.php';
	$search = mysqli_real_escape_string($conexionBd, $_POST['busqueda']);
	$query = "SELECT usuario, nombre, apellidoPaterno, apellidoMaterno, correo, contrasena, zona, area, privilegios FROM usuarios WHERE usuario LIKE '%".$search."%' ";
	$resultado = mysqli_query($conexionBd, $query);

	if($_POST['busqueda'] == "")
	{
		echo 
			 '<form id="formActualizacion">
                Usuario:
                <input class="form-control" type="text" id="nusuario" name="nusuario" size="41">
                Nombre de Usuario:
                <input class="form-control" type="text" id="nombreUsuario" name="nombreUsuario" size="41">
                Apellido Paterno:
                <input class="form-control" type="text" id="apellidoPaterno" name="apellidoPaterno" size="41">
                ApellidoMaterno
                <input class="form-control" type="text" id="apellidoMaterno" name="apellidoMaterno"  size="41">
                Contrasena:
                <input class="form-control" type="password" id="contrasena" name="contrasena" size="41">
                Zona:<br>
                <select class="form-control" id="zona" name="zona">
                    <option>bajas</option>
                    <option>bajio</option>
                    <option>centro</option>
                    <option>norEste</option>
                    <option>norOeste</option>
                    <option>pacifico</option>
                    <option>sur</option>            
                </select>
                Area:
                <select class="form-control" id="area" name="area">
                    <option>ingenieria</option>
                    <option>ventas</option>
                    <option>servicio a cliente</option>
                </select>
                Privilegios de usuario:
                <select class="form-control" id="privilegios" name="privilegios">
                    <option>ingenieria local</option>
                    <option>ingenieria nacional</option>
                    <option>ventas local</option>
                    <option>ventas nacional</option>
                    <option>permabase</option>
                    <option>cuentas clave</option>
                    <option>administrador</option>
                    <option>servicio a cliente</option>
                </select>
                Correo:
                <input class="form-control" type="email" id="correoUsuario" name="correoUsuario">
            </form>';
	} 
	else
	{
		if (mysqli_num_rows($resultado) > 0 ) 
		{
            $row = mysqli_fetch_assoc($resultado);
			// while ($row = mysqli_fetch_assoc($resultado))
			// {
				echo 
                "<form id='formActualizacion'>
                Usuario:
                <input class='form-control' type='text' id='nusuario' name='nusuario' size='41' value='$row[usuario]' readonly>
                Nombre de Usuario:
                <input class='form-control' type='text' id='nombreUsuario' name='nombreUsuario' size='41' value='$row[nombre]'>
                Apellido Paterno:
                <input class='form-control' type='text' id='apellidoPaterno' name='apellidoPaterno' size='41' value='$row[apellidoPaterno]'>
                ApellidoMaterno
                <input class='form-control' type='text' id='apellidoMaterno' name='apellidoMaterno'  size='41' value='$row[apellidoMaterno]'>
                Contrasena:
                <input class='form-control' type='password' id='contrasena' name='contrasena' size='41' value='$row[contrasena]'>
                Zona:<br>
                <select class='form-control' id='zona' name='zona' value='$row[zona]'>
                    <option>bajas</option>
                    <option>bajio</option>
                    <option>centro</option>
                    <option>norEste</option>
                    <option>norOeste</option>
                    <option>pacifico</option>
                    <option>sur</option>            
                </select>
                Area:
                <select class='form-control' id='area' name='area' value='$row[area]'>
                    <option>ingenieria</option>
                    <option>ventas</option>
                    <option>servicio a cliente</option>
                    <option>servicio a cliente</option>
                </select>
                Privilegios de usuario:
                <select class='form-control' id='privilegios' name='privilegios' value='$row[privilegios]'>
                    <option>ingenieria local</option>
                    <option>ingenieria nacional</option>
                    <option>ventas local</option>
                    <option>ventas nacional</option>
                    <option>permabase</option>
                    <option>cuentas clave</option>
                    <option>administrador</option>
                    <option>servicio a cliente</option>
                </select>
                Correo:
                <input class='form-control' type='email' id='correoUsuario' name='correoUsuario' value='$row[correo]'>
            </form>";   	
	        // }
	    } 
	    else 
	    {
	    	echo 
			'<form id="formActualizacion">
                Usuario: [ESTE USUARIO NO EXISTE]
                <input class="form-control" type="text" id="nusuario" name="nusuario" size="41">
                Nombre de Usuario:
                <input class="form-control" type="text" id="nombreUsuario" name="nombreUsuario" size="41">
                Apellido Paterno:
                <input class="form-control" type="text" id="apellidoPaterno" name="apellidoPaterno" size="41">
                ApellidoMaterno
                <input class="form-control" type="text" id="apellidoMaterno" name="apellidoMaterno"  size="41">
                Contrasena:
                <input class="form-control" type="password" id="contrasena" name="contrasena" size="41">
                Zona:<br>
                <select class="form-control" id="zona" name="zona">
                    <option>bajas</option>
                    <option>bajio</option>
                    <option>centro</option>
                    <option>norEste</option>
                    <option>norOeste</option>
                    <option>pacifico</option>
                    <option>sur</option>            
                </select>
                Area:
                <select class="form-control" id="area" name="area">
                    <option>ingenieria</option>
                    <option>ventas</option>
                    <option>servicio a cliente</option>
                    <option>servicio a cliente</option>
                </select>
                Privilegios de usuario:
                <select class="form-control" id="privilegios" name="privilegios">
                    <option>ingenieria local</option>
                    <option>ingenieria nacional</option>
                    <option>ventas local</option>
                    <option>ventas nacional</option>
                    <option>permabase</option>
                    <option>cuentas clave</option>
                    <option>administrador</option>
                    <option>servicio a cliente</option>
                </select>
                Correo:
                <input class="form-control" type="email" id="correoUsuario" name="correoUsuario">
            </form>';
		}
	}
	mysqli_close($conexionBd);
}

?>