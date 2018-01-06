<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>actualizacionDespacho</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, intial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="../../_bootstrap/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Barlow|Roboto" rel="stylesheet">
    <link rel="stylesheet" href="../css/actualizacionDespacho.css" />
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
        <fieldset class="form-group"><legend>Busqueda de Despacho:</legend>
            Nombre del Despacho:
            <input class="form-control" type="text" id="busqueda" name="busqueda">  
        </fieldset>
        <fieldset class="form-group"><legend>Datos del Despacho</legend>
            <form id="formActDespacho">       
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
            </form>
        </fieldset>
        <button class="btn btn-primary" type="submit" id="btnActualizar">Actualizar</button>
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
    <script src="../js/actualizacionDespacho.js"></script>
    <script src="../js/buscarDespacho.js"></script>
</body>

</html>