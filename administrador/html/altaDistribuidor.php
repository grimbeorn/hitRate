<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>altaDistribuidor</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, intial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="../../_bootstrap/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Barlow|Roboto" rel="stylesheet">
    <link rel="stylesheet" href="../css/altaDistribuidor.css" />
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
        <form id="fAltaDistribuidor"><legend>Distribuidor:</legend>
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
                Asesor de Ingenieria encargado de dar seguimiento: 
                <select class="form-control" name="asesorIngenieria" id="asesorIngenieria">
                    <option>seleccionar asesor</option>
                </select>
                Ejecutivo de Ventas encargado de dar seguimiento: 
                <select class="form-control" name="ejecutivoVentas" id="ejecutivoVentas">
                    <option>seleccionar ejecutivo</option>
                </select>
                calle:
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
    <script src="../js/altaDistribuidor.js"></script>
    <script src="../js/buscarDistribuidor.js"></script>
</body>

</html>