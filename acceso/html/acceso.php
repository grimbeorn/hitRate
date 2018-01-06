<?php
session_start();

if (isset($_SESSION['user']))
{
    if($_SESSION['user']['privilegios'] == "administrador")
    {
        header('Location: ../../administrador/html/panelAdmin.php');
    }
    else if ($_SESSION['user']['privilegios'] == "ingenieria local")
    {
        header('Location: ../../ingenieria/html/accesoIngenieria.php');
    }
    else if ($_SESSION['user']['privilegios'] == "ingenieria nacional")
    {
        header('Location: ../../ingenieria/html/accesoIngenieria.php');
    }
    else if ($_SESSION['user']['privilegios'] == "ventas local")
    {
        header('Location: ../../ventas/html/accesoVentas.php');
    }
    else if ($_SESSION['user']['privilegios'] == "ventas nacional")
    {
        header('Location: ../../ventas/html/accesoVentas.php');
    }
    else if ($_SESSION['user']['privilegios'] == "servicio a cliente")
    {
        header('Location: ../../servicio/html/accesoServicio.php');
    }
    else{}
}
else 
{
      
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>acceso</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, intial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="../../_bootstrap/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Barlow|Roboto" rel="stylesheet">
    <link rel="stylesheet" href="../css/acceso.css" />
</head>

<body>

    <!-- CABECERA -->
    <header>
        <div class="container">
            <section class="row">
                <img class="col-xs-08 col-sm-4 col-md-4" id="logo" src="../../_imgs/logo.png" width="300" height="60" alt="logotipoPanelRey">
                <h5 class="col-xs-12 col-sm-8 col-md-8" id="idUser"></h5>
            </section>            
        </div>
    </header>

    <div class="error">
        <span>datos de ingreso no válidos</span>
    </div>
    <div class="main">
        <form action="" id="formlg">
            <input type="text" name="usuariolg" placeholder="usuario" required pattern="[A-Za-z0-9]{1,15}"/>
            <input type="password" name="passlg" placeholder="contraseña" required pattern="[A-Za-z0-9]{1,15}"/>
            <input type="submit" class="botonlg" value="iniciar sesión" />
        </form>
    </div>
        
    <!-- PIE -->
    <footer class="container" >
        <div class="row" id="footer">
            <h6>®HitRate. 2.1.0</h6>
        </div>
    </footer>
        
    
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/acceso.js"></script>
</body>

</html>

