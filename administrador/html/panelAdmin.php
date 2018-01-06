<?php 

session_start();
if(isset($_SESSION['user']))
{
    if($_SESSION['user']['privilegios'] == "ingenieria local")
    {
        header("Location: ../../ingenieria/html/accesoIngenieria.php");
    }
    else if($_SESSION['user']['privilegios'] == "ingenieria nacional")
    {
        header("Location: ../../ingenieria/html/accesoIngenieria.php");
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
    <title>Panel Administrador</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, intial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="../../_bootstrap/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Barlow|Roboto" rel="stylesheet">
    <link rel="stylesheet" href="../css/panelAdmin.css" />
</head>

<body>
    <!-- CABECERA -->
    <header>
        <div class="container">
            <section id="cabecera" class="row">
                <h5 class="col-xs-12 col-sm-8 col-md-8" id="idUser">usuario: <?php echo $_SESSION['user']['usuario']?></h5>
                <img class="col-xs-08 col-sm-4 col-md-4" id="logo" src="../../_imgs/logo.png" width="300" height="60" alt="logotipoPanelRey">
            </section>            
        </div>
    </header>
    <div id="espacio"></div>
    <!-- CUERPO -->
    <div class="container">
        <div class="row justify-content-md-center">
            <div id="form" class="col col-md-3">
                <fieldset id="formulario"><legend>Panel de Administrador</legend>
                    <input class="rdbtn" id="rbtnActividad" type="radio" name="opcion"> actividad<br>
                    <input class="rdbtn" id="rbtnDespacho" type="radio" name="opcion"> despacho<br>
                    <input class="rdbtn" id="rbtnDistribuidor" type="radio" name="opcion"> distribuidor<br>
                    <input class="rdbtn" id="rbtnUsuario" type="radio" name="opcion"> usuario<br>
                    <input class="rdbtn" id="rbtnProyecto" type="radio" name="opcion" checked><a id="seguimiento" href="seguimiento.php">proyecto</a><br>
                </fieldset>
            </div>
            <div id="btns" class="col-md-auto">
                <button class="btn btn-primary" type="button" id="btnAlta">alta</button>
                <button class="btn btn-primary" type="button" id="btnActualizar">actualizar</button>
                <button class="btn btn-primary" type="button" id="btnResumen">resumen</button>
                <div id="cs">
                    <a id="cerrarSesion" href="../../acceso/php/logout.php">cerrar sesión</a>
                </div>
            </div>
        </div>
    </div>
    <!-- PIE -->
    <footer class="container" >
        <div class="row" id="footer">
                <h6>®HitRate. 2.1.0</h6>
        </div>
    </footer>

    <script src="../../administrador/js/jquery-3.2.1.min.js"></script>
    <script src="../../administrador/js/panelAdmin.js"></script>
</body>

</html>