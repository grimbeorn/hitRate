<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>altaActividad</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, intial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="../../_bootstrap/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Barlow|Roboto" rel="stylesheet">
    <link rel="stylesheet" href="../css/altaActividad.css" />
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
        <form id="formAltaAct">
            <fieldset class="form-group"><legend>Actividad</legend>
                Nombre de la actividad:
                <input class="form-control" type="text" id="nombreActividad" name="nombreActividad" size="41">
                Actividad:
                <select class="form-control" id="tipoAtividad" name="tipoActividad">
                    <option></option>
                    <option>curso</option>
                    <option>visita</option>
                    <option>asistencia tecnica</option>
                    <option>otro</option>
                </select>
                Asesor encargado:
                <select class="form-control" id="asesorIngenieria" name="asesorIngenieria">
                    <option></option>
                </select>
                zona:
                <select class="form-control" id="zona" name="zona">
                    <option>norEste</option>
                    <option>norOste</option>
                    <option>pacifico</option>
                    <option>bajio</option>
                    <option>centro</option>
                    <option>surEste</option>
                </select>
                fecha en que fue atendida la actividad:
                <input class="form-control" type="date" name="fechaDeAtencion">
                Bitácora de Seguimiento:
                <textarea class="form-control" id="seguimiento" name="seguimiento"></textarea><br>
            </fieldset>
        </form>
        <button class="btn btn-primary" type="submit" id="btnAlta">Guardar</button>
        <button class="btn btn-primary" type="button" id="btnVolver">Volver</button>
        <button class="btn btn-primary" type="button" id="btnSalir">Salir</button>
    </div>
    <!-- PIE -->
    <!-- <footer class="container" >
        <div class="row" id="footer">
            <h6>®HitRate. 2.1.0</h6>
        </div>
    </footer> -->
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/buscarActividad.js"></script>
    <script src="../js/altaActividad.js"></script>
</body>

</html>