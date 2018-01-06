<?php session_start(); ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>altaUsuario</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, intial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="../../_bootstrap/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Barlow|Roboto" rel="stylesheet">
    <link rel="stylesheet" href="../css/altaUsuario.css" />
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
        <legend>Datos del Usuario:</legend>
        <form id="formUsuario">
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
                <option>permaBase</option>
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
        </form>
        <button class="btn btn-primary" type="submit" id="btnGuardar" name="btnGuardar">Guardar</button>
        <button class="btn btn-primary" type="submit" id="btnSalir" name="btnSalir">Salir</button>
        <button class="btn btn-primary" type="submit" id="btnVolver" name="btnSalir">Volver</button>
    </div>
    <!-- PIE -->
    <!-- <footer class="container" >
        <div class="row" id="footer">
            <h6>®HitRate. 2.1.0</h6>
        </div>
    </footer> -->
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/altaUsuario.js"></script>
</body>

</html>