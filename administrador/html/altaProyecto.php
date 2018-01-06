<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>altaProyecto</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, intial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="../../_bootstrap/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Barlow|Roboto" rel="stylesheet">
    <link rel="stylesheet" href="../css/altaProyecto.css" />
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
        <form id="formAltaProyecto">
            <fieldset class="form-group"><legend>Datos del Proyecto:</legend>
                Nombre del Proyecto:
                <input type="text" id="nombre" name="nombre" class="form-control">
                Clasificacion del proyecto por volumen de hojas:
                <select id="clasificacion" name="clasificacion" class="form-control">
                    <option></option>
                    <option>A.Grande  - 5,001 a mas   hojas</option><br>
                    <option>B.Mediano - 2,501 a 5,000 hojas</option><br>
                    <option>C.Pequeno -   500 a 2,500 hojas</option>
                </select>
                Sistema constructivo que se va a utilizar en la obra:<br>
                <select id="sistemaConstructivo" name="sistemaConstructivo" class="form-control">
                    <option></option>
                    <option>muros divisorios</option><br>
                    <option>muros exteriores</option><br>
                    <option>plafones</option><br>
                    <option>muros divisorios / muros exteriores / plafones</option><br>
                    <option>muros divisorios / muros exteriores</option><br>
                    <option>muros divisorios / plafones</option><br>
                    <option>muros exteriores / plafones</option><br>                
                </select>
                Calle:
                <input class="form-control" type="text" id="calle" name="calle" size=50>
                Num ext:
                <input class="form-control" type="text" id="numeroExterior" name="numeroExterior" size=50>
                Num int:
                <input class="form-control" type="text" id="numeroInterior" name="numeroInterior" size=50>
                Colonia:
                <input class="form-control" type="text" id="colonia" name="colonia" size=50>
                CP:
                <input class="form-control" type="text" id="codigoPostal" name="codigoPostal" size=50>
                Municipio / delegacion:
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
                Zona donde se encuentra el proyecto:
                <select class="form-control" id="zonaFisicaProyecto" name="zonaFisicaProyecto">
                    <option></option>
                    <option>norEste</option>
                    <option>norOste</option>
                    <option>pacifico</option>
                    <option>bajio</option>
                    <option>centro</option>
                    <option>surEste</option>
                </select>
                Zona que atiende el proyecto:
                <select class="form-control" id="zonaQueAtiendeProyecto" name="zonaQueAtiendeProyecto">
                <option></option>
                    <option>norEste</option>
                    <option>norOste</option>
                    <option>pacifico</option>
                    <option>bajio</option>
                    <option>centro</option>
                    <option>surEste</option>
                </select>
                Coordenadas geograficas de la obra en formato decimal. Ejemplo: 25.668737,-100.3261963<br>
                <input class="form-control" type="text" id="coordenadasDeObra" name="coordenadasDeObra" size=50>
                Tipo de edificacion:
                <select class="form-control" id="tipoEdificacion" name="tipoEdificacion">
                    <option></option>
                    <option>vivienda horizontal</option>
                    <option>vivienda vertical</option>
                    <option>cultural</option>
                    <option>comercial</option>
                    <option>salud</option>
                    <option>hoteleria</option>
                    <option>oficinas</option>
                    <option>corporativo</option>
                    <option>industrial</option>
                    <option>mixto</option>
                    <option>otro</option>
                </select>
                Fuente de alta de la obra:
                <select class="form-control" id="fuenteDeAlta" name="fuenteDeAlta">
                    <option></option>
                    <option>panel rey</option>
                    <option>distribuidor</option>
                    <option>plaforama</option>
                    <option>otro</option>
                </select>
            </fieldset>
            Etapa de la obra al momento de ser registrada (este dato no debe cambiarse en el futuro):<br>
            <select class="form-control" id="etapaProyecto" name="etapaProyecto">
            <option></option>
                <option>proyecto</option>
                <option>movimiento de tierras</option>
                <option>cimentacion</option>
                <option>estructura</option>
                <option>fachada</option>
                <option>acabados</option>
                <option>detenida temporalmente</option>
                <option>cancelada</option>
            </select>
            <fieldset class="form-group"><legend>Despacho Encargado</legend>
                Seleccionar el despacho con quien tenemos entrada a la obra:<br>
                <select class="form-control" id="busquedaDespacho" name="busquedaDespacho">
                    <option>seleccionar despacho</option>
                </select>
                <button class="btn btn-secondary" type="button" id="btnDespachoNuevo" name="btnDespachoNuevo">crear despacho</button>
            </fieldset>
            <fieldset class="form-group"><legend>Ingeniería</legend>
                Volumen estimado de panel:
                <input class="form-control" type="text" id="volumenEstimadoIngenieria" name="volumenEstimadoIngenieria">
                Asesor de Ingenieria encargado de dar seguimiento: 
                <select class="form-control" name="asesorIngenieria" id="asesorIngenieria">
                    <option>seleccionar asesor</option>
                </select>
                Fecha en que se pasó a ventas:
                <input class="form-control" type="date" id="fechaAVentas" name="fechaAVentas">
                Observaciones de la Obra por parte de Ingeniería:
                <textarea class="form-control" rows="4" id="bitacoraSeguimientoIngenieria" name="bitacoraSeguimientoIngenieria" cols="50"></textarea>
            </fieldset>
            <fieldset class="form-group"><legend>Ventas</legend>
                Fecha de recepción de obra por parte de ingeniería:
                <input class="form-control" type="date" id="fechaRecepcionObraPorVentas" name="fechaRecepcionObraPorVentas">
                Ejecutivo de Ventas encargado de dar seguimiento: 
                <select class="form-control" name="ejecutivoVentas" id="ejecutivoVentas">
                    <option>seleccionar ejecutivo</option><br>
                </select>
                Volumen estimado de panel:
                <input class="form-control" type="text" id="volumenEstimadoVentas" name="volumenEstimadoVentas"><br>
                <fieldset class="form-GROUP"><legend>Bitácora:</legend>
                    <textarea class="form-control" rows="4" id="bitacoraSeguimientoVentas" name="bitacoraSeguimientoVentas" cols="50"></textarea>
                </fieldset>
            </fieldset>
        </form>
        <button class="btn btn-primary" type="submit" id="btnGuardar">Guardar</button>
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
    <script src="../js/buscarProyecto.js"></script>
    <script src="../js/altaProyecto.js"></script>
</body>

</html>