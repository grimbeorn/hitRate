<?php

if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
{
	require 'conexion.php';
	sleep(1);
	session_start();
	$mysqli = mysqli_set_charset($conexionBd,"utf8");
	$usuario = mysqli_real_escape_string($conexionBd, $_POST['usuariolg']);
	$pass = mysqli_real_escape_string($conexionBd, $_POST['passlg']);
	if($consulta = mysqli_prepare($conexionBd, "SELECT usuario, privilegios FROM usuarios WHERE usuario = ? AND contrasena = ? "))
	{
		mysqli_stmt_bind_param($consulta, 'ss', $usuario, $pass);
		mysqli_stmt_execute($consulta);
		$resultado = mysqli_stmt_get_result($consulta);
		if(mysqli_num_rows($resultado) == 1)
		{
			$datos = mysqli_fetch_assoc($resultado);
			$_SESSION['user'] = $datos;
			echo json_encode(array('error' => false, 'privilegios' => $datos['privilegios']));
		} 
		else 
		{
			echo json_encode(array('error' => true));
		}
		mysqli_close($conexionBd);
	}
}

?>