document.getElementById("btnAlta").addEventListener("click",function alta()
{
	if(rbtnUsuario.checked)
	{
		location.href="../html/altaUsuario.php";
	}
	else if (rbtnDespacho.checked)
	{
    	location.href="../html/altaDespacho.php";
    }
    else if (rbtnDistribuidor.checked)
    {
    	location.href="../html/altaDistribuidor.php";
    }
    else if (rbtnProyecto.checked)
    {
    	location.href="../html/altaProyecto.php";
    }
    else if (rbtnActividad.checked)
    {
    	location.href="../html/altaActividad.php";
    }
    else
    {
    }
});

document.getElementById("btnActualizar").addEventListener("click",function actualizar()
{
	if(rbtnUsuario.checked)
	{
		location.href="../html/actualizacionUsuario.php";
	}
	else if (rbtnDespacho.checked)
	{
    	location.href="../html/actualizacionDespacho.php";
    }
    else if (rbtnDistribuidor.checked)
    {
    	location.href="../html/actualizacionDistribuidor.php";
    }
    else if (rbtnProyecto.checked)
    {
    	location.href="../html/actualizacionProyecto.php";
    }
    else if (rbtnActividad.checked)
    {
    	location.href="../html/actualizacionActividad.php";
    }
    else
    {
    }
});

document.getElementById("btnResumen").addEventListener("click",function resumen()
{
		location.href="resumen.php";

});