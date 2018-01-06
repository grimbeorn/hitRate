<?php 

session_start();
if(isset($_SESSION['user']))
{
    if($_SESSION['user']['privilegios'] == "administrador")
    {
        header("Location: ../../administrador/html/panelAdmin.php");
    }
    else if($_SESSION['user']['privilegios'] == "ventas local")
    {
        header("Location: ../../ventas/html/accesoVentas.php");
    }
    else if($_SESSION['user']['privilegios'] == "ventas nacional")
    {
        header("Location: ../../ventas/html/accesoVentas.php");
    }
    else if($_SESSION['user']['privilegios'] == "servicio a cliente")
    {
        header("Location: ../../servicio/html/accesoServicio.php");
    }
}
else
{
    header("Location: ../../acceso/html/acceso.php");
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>accesoIngenieriaLocal</title>
</head>

<body>
<p>Bienvenido <?php echo $_SESSION['user']['usuario']?></p>
<form method="post" action="">
    <fieldset><legend>Ingenieria:</legend>
        <fieldset>
            <!--<legend></legend>-->
            <input type="radio" name="opcion01"> proyecto<br>
            <input type="radio" name="opcion01"> actividad<br>
            <input type="radio" name="opcion01"> despacho<br>
            <input type="radio" name="opcion01"> distribuidor<br><br>
            <input type="submit" name="btnSiguiente" value="actualizacion">
            <input type="submit" name="btnSalir" value="alta"> 
            <input type="submit" name="btnResumenIngenieria" value="ir a resumen">         
        </fieldset><br>
        <input type="submit" name="btnSalir" value="salir"><br>
    </fieldset>
</form>
</body>

</html>