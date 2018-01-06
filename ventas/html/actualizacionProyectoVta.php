<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <title>prueba03</title>
</head>

<body>

<fieldset>
    <fieldset><legend>busqueda del proyecto</legend>
        Nombre del proyecto:<br>
        <input type="text" name="busqueda">  
</fieldset><br>

<form method="post" action="">
  <fieldset>
    <legend>Datos del Proyecto:</legend>
    nombre del proyecto:<br>
    <input type="text" name="nombre" size=50>
    <br><br>
    Clasificacion del proyecto por volumen de hojas:<br>
    <select name="clasificacion">
    <option></option>
        <option>A.Grande  - 5,001 a mas   hojas</option><br>
        <option>B.Mediano - 2,501 a 5,000 hojas</option><br>
        <option>C.Pequeno -   500 a 2,500 hojas</option><br>
    </select><br><br>
    Sistema constructivo que se va a utilizar en la obra:<br>
    <select name="sistemaConstructivo">
        <option></option>
        <option>muros divisorios</option><br>
        <option>muros exteriores</option><br>
        <option>plafones</option><br>
        <option>muros divisorios / muros exteriores / plafones</option><br>
        <option>muros divisorios / muros exteriores</option><br>
        <option>muros divisorios / plafones</option><br>
        <option>muros exteriores / plafones</option><br>                
    </select><br><br>

    calle:<br>
    <input type="text" name="calle" size=50><br><br>
    num ext:<br>
    <input type="text" name="numeroExterior" size=50><br><br>
    num int:<br>
    <input type="text" name="numeroInterior" size=50>
    <br><br>
    colonia:<br>
    <input type="text" name="colonia" size=50>
    <br><br>
    cp:<br>
    <input type="text" name="codigoPostal" size=50>
    <br><br>
    municipio / delegacion:<br>
    <input type="text" name="municipio" size=50>
    <br><br>
    Estado:<br>
    <select name="estado">
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
        <option>Zacatecas</option><br>
    </select><br><br>    
    zona donde se encuentra el proyecto:<br>
    <select name="zonaFisica">
    <option></option>
        <option>norEste</option>
        <option>norOste</option>
        <option>pacifico</option>
        <option>bajio</option>
        <option>centro</option>
        <option>surEste</option>
    </select><br><br>
    zona que atiende el proyecto:<br>
    <select name="zonaQueAtiende">
    <option></option>
        <option>norEste</option>
        <option>norOste</option>
        <option>pacifico</option>
        <option>bajio</option>
        <option>centro</option>
        <option>surEste</option>
    </select><br><br>

    coordenadas geograficas de la obra en formato decimal.<br> Ejemplo: 25.668737,-100.3261963<br>
    <input type="text" name="coordenadas" size=50>
    <br><br>
    Tipo de edificacion:<br>
    <select name="tipoEdificacion">
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
    </select><br><br>
    Fuente de alta de la obra:<br>
    <select name="fuenteDeAlta">
        <option></option>
        <option>panel rey</option>
        <option>distribuidor</option>
        <option>plaforama</option>
        <option>distribuidor</option>
        <option>otro</option>
    </select><br><br>
    Etapa de la obra al momento de ser registrada (esta no debe cambiarse en el futuro):<br>
    <select name="etapa">
    <option></option>
        <option>proyecto</option>
        <option>movimiento de tierras</option>
        <option>cimentacion</option>
        <option>estructura</option>
        <option>fachada</option>
        <option>acabados</option>
        <option>detenida temporalmente</option>
        <option>cancelada</option>
    </select><br><br>

    Etapa actual de la obra (esta debe irse modificando según avance la obra):<br>
    <select name="etapaActual">
    <option></option>
        <option>proyecto</option>
        <option>movimiento de tierras</option>
        <option>cimentacion</option>
        <option>estructura</option>
        <option>fachada</option>
        <option>acabados</option>
        <option>detenida temporalmente</option>
        <option>cancelada</option>
    </select><br><br>

</form>

<fieldset>
<form method="post" action="">
        <legend>Despacho Encargado</legend>
        Seleccionar el despacho con quien tenemos entrada a la obra:<br>
        <select name="despachoEncargado">
            <option> 

            <?php 
            //PHP PARA PERMITIR ACCESO A USUARIOS EXISTENTES
            //**************************PARaMETROS CONEXIoN******************
            define ('usuarioBd', 'root');
            define ('contrasenaBd', '');
            define ('hostBd', 'localhost');
            define ('nombreBd', 'hitrate.01');
            //***************************************************************
            //**************************CONEXIoN A BASE DE DATOS*************
            $conexionBd = mysqli_connect(hostBd,usuarioBd,contrasenaBd);
            if (!$conexionBd) {
            die("Error en la conexion a la base de datos: " . mysqli_error($conexionBd));
            exit();
            }
            $seleccionBd = mysqli_select_db($conexionBd, nombreBd);
            if (!$seleccionBd) {
            die("Error en la seleccion de la base de datos: " . mysqli_error($conexionBd));
            exit();
            }
            //***************************************************************

            $sql = "SELECT nombreDespacho FROM despachos ORDER BY idDespacho";
            $result = mysqli_query($conexionBd,$sql);
            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
            //printf($row['nombreDespacho']) 
            ?> 

            </option>
        </select><br><br>
        <input type="submit" name="btnDespachoNuevo" value="crear despacho">
</form>
</fieldset><br>



<form>
<!--<fieldset>
    <legend>Ingeniería</legend>
    Volumen estimado de panel:<br>
    <input type="text" name="volumenEstimadoIngenieria"><br>
    Fecha en que se pasó a ventas:<br>
    <input type="date" name="fechaAVentas"><br>
    Seguimiento de Obra por parte de Ingeniería:<br>
    <input type="text" name="bitacoraSeguimientoIngenieria" size=100><br>
    Etapa actual de la obra:<br>
    <select name="etapaActualProyectoVtas">
        <option></option>
        <option>proyecto</option>
        <option>movimiento de tierras</option>
        <option>cimentacion</option>
        <option>estructura</option>
        <option>fachada</option>
        <option>acabados</option>
        <option>detenida temporalmente</option>
        <option>cancelada</option>
    </select><br><br>
</fieldset><br>-->


<fieldset>
    <legend>Ventas</legend>
    Fecha de recepción de obra por parte de ingeniería:<br>
    <input type="date" name="recepcionObra"><br><br>
    Distribuidor(es) que está(n) cotizando:<br>
    <input type="text" name="distribuidoresCotizando"><br><br>
    Distribuidor Asignado:<br>
    <select name="distribuidorAsignado"><br>
    <option>***listado de despachos de la base de datos***</option><br>
    </select><br><br>
    Fecha en que el distribuidor presentó la cotizaión:<br>
    <input type="date" name="fechaCotizacion"><br><br>
    Veredicto:<br>
    <select name="veredicto">
        <option></option>
        <option>perdida usg</option>
        <option>perdida comex</option>
        <option>perdida otro</option>
        <option>ganada</option>
        <option>compartida</option>

    </select><br><br>
    Fecha de veredicto:<br>
    <input type="date" name="fechaVeredicto"><br><br>
    Volumen estimado de panel:<br>
    <input type="text" name="volumenEstimadoVentas"><br><br>
    Bitácora:<br>
    <input type="text" name="seguimientoVentas"><br><br>
    Estatus del seguimiento:<br>
    <select name="statusActual">
        <option></option>
        <option>asignada al distribuidor</option>
        <option>cotizada</option>
        <option>en espera de veredicto</option>
        <option>suministrando</option>
        <option>finalizada</option>
    </select><br><br>
    Etapa actual de la obra:<br>
    <select name="etapaActualProyectoVtas">
        <option></option>
        <option>proyecto</option>
        <option>movimiento de tierras</option>
        <option>cimentacion</option>
        <option>estructura</option>
        <option>fachada</option>
        <option>acabados</option>
        <option>detenida temporalmente</option>
        <option>cancelada</option>
    </select><br><br>
</fieldset><br>

<input type="submit" name="btnGuardar" value="guardar">
<input type="submit" name="btnSalir" value="salir">

</form>


</body>
</html>