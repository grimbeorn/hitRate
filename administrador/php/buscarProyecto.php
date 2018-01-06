<?php 

if(isset($_POST['busqueda'])) 
{
    busquedaDeProyecto();
} else {
    echo "error";
}

function busquedaDeProyecto()
{
    require 'conexion.php';
    $listaAsesores="";
    $listaEjecutivos="";
    $listaDespachos="";
    $listaDistribuidores="";
    $print = "";
    $print01 = "";
    $print02 = "";
    $print03 = "";
    $print04 = "";
    $print05 = "";
    $print06 = "";
    $print07 = "";
    $print08 = "";
    $print09 = "";

    // query DESPACHO
    $queryDespachos = "SELECT nombreDespacho FROM despachos";
    $resultDespachos = mysqli_query($conexionBd, $queryDespachos);
    //$listaDespachos= '<select name="busquedaDespacho" id="busquedaDespacho" class="form-control">';
    //$listaDespachos.= '<option>seleccionar despacho</option>';
    while($rowDespachos = mysqli_fetch_assoc($resultDespachos))
    {
        $listaDespachos .= "<option>$rowDespachos[nombreDespacho]</option>";
    }
    $listaDespachos.= '</select><br>';
    //echo $listaAsesores;

    // query DISTRIBUIDOR
    $queryDistribuidores = "SELECT nombre FROM distribuidorespanelrey";
    $resultDistribuidores = mysqli_query($conexionBd, $queryDistribuidores);
    //$listaDistribuidores= '<select name="busquedaDistribuidor" id="busquedaDistribuidor" class="form-control">';
    //$listaDistribuidores.= '<option>seleccionar distribuidor</option>';
    while($rowDistribuidores = mysqli_fetch_assoc($resultDistribuidores))
    {
        $listaDistribuidores.= "<option>$rowDistribuidores[nombre]</option>";
    }
    $listaDistribuidores.= '</select><br>';
    //echo $listaDistribuidores;

    // query ASESOR
    $queryAsesores = "SELECT usuario FROM usuarios WHERE area='ingenieria' ";
    $resultAsesores = mysqli_query($conexionBd, $queryAsesores);
    // $listaAsesores= '<select name="asesorIngenieria" id="asesorIngenieria" class="form-control">';
    // $listaAsesores.= '<option>seleccionar asesor</option>';
    while($rowAsesores = mysqli_fetch_assoc($resultAsesores))
    {
        $listaAsesores.= "<option>$rowAsesores[usuario]</option>";
    }
    $listaAsesores.= '</select><br>';
    //echo $listaAsesores;

    // query EJECUTIVO
    $queryEjecutivos = "SELECT usuario FROM usuarios WHERE area='ventas'";
    $resultEjecutivos = mysqli_query($conexionBd, $queryEjecutivos);
    // $listaEjecutivos= '<select name="ejecutivoVentas" id="ejecutivoVentas" class="form-control">';
    // $listaEjecutivos.= '<option>seleccionar ejecutivo</option>';
    while($rowEjecutivos = mysqli_fetch_assoc($resultEjecutivos))
    {
        $listaEjecutivos.= "<option>$rowEjecutivos[usuario]</option>";
    }
    $listaEjecutivos.= '</select>';
    //echo $listaEjecutivos;

    $search = mysqli_real_escape_string($conexionBd, $_POST['busqueda']);
    $query = "SELECT idProyecto, nombre, clasificacion, sistemaConstructivo, calle, numeroExterior, numeroInterior, colonia, municipio, codigoPostal, estado, zonaFisicaProyecto, zonaQueAtiendeProyecto, coordenadasDeObra, tipoEdificacion, fuenteDeAlta, etapaProyecto, despachoEncargado, volumenEstimadoIngenieria, asesorIngenieria, fechaAVentas, bitacoraSeguimientoIngenieria, etapaActualProyectoIng, fechaRecepcionObraPorVentas, numeroDistribuidoresPart, ejecutivoVentas, volumenEstimadoVentas, bitacoraSeguimientoVentas, distribuidorCotizando, fechaAsignacionDistribuidor, fechaCotizacion, veredicto, fechaDeVeredicto, notasSeguimientoADistribuidor, etapaActualProyectoVtas, materialRetirado, fechaRetiro FROM proyectos WHERE nombre LIKE '%".$search."%' ";
    $resultado = mysqli_query($conexionBd, $query);

    if($_POST['busqueda'] == "")
    {
        $print01 = '<form id="formActProy">
                        <fieldset class="form-group"><legend>Datos del Proyecto:</legend>
                            Nombre del Proyecto:
                            <input type="text" id="nombre" name="nombre" class="form-control">
                            ID del proyecto:<br>
                            <input type="text" id="idProyecto" name="idProyecto" size="50" class="form-control"><br><br>
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
                        <fieldset class="form-group">
                            <legend>Despacho Encargado</legend>
                            Seleccionar el despacho con quien tenemos entrada a la obra:<br>
                            <select class="selectpicker" data-live-search="true" id="busquedaDespacho" name="busquedaDespacho">
                            <option>seleccionar despacho</option>';
            $print02 = $listaDespachos;
            $print03 = '<button class="btn btn-secondary" type="button" id="btnDespachoNuevo" name="btnDespachoNuevo">crear despacho</button>
                        </fieldset><br>
                        <fieldset><legend>Seguimiento de Ingeniería</legend>
                            Asesor de Ingenieria encargado de dar seguimiento:
                            <select name="asesorIngenieria" id="asesorIngenieria" class="form-control">
                            <option>seleccionar asesor</option>';
            $print04 = $listaAsesores;
            $print05 = 'Volumen estimado de panel:
                        <input class="form-control" type="text" id="volumenEstimadoIngenieria" name="volumenEstimadoIngenieria">
                        Fecha en que se pasó a ventas:
                        <input class="form-control" type="date" id="fechaAVentas" name="fechaAVentas">
                        Etapa actual de la obra: (debe irse modificando según sea el avance real en la obra)
                        <select class="form-control" id="etapaActualProyectoIng" name="etapaActualProyectoIng">
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
                        Seguimiento de Obra por parte de Ingeniería:<br>
                        <textarea class="form-control" rows="4" id="bitacoraSeguimientoIngenieria" name="bitacoraSeguimientoIngenieria" cols="50"></textarea>
                    </fieldset><br>
                    <fieldset><legend>Seguimiento de Ventas</legend>
                        Ejecutivo de Ventas encargado de dar seguimiento:
                        <select name="ejecutivoVentas" id="ejecutivoVentas" class="form-control">
                            <option>seleccionar ejecutivo</option>';
            $print06 = $listaEjecutivos;
            $print07 = 'Fecha de recepción de obra por parte de ingeniería:
                        <input class="form-control" type="date" id="fechaRecepcionObraPorVentas" name="fechaRecepcionObraPorVentas">
                        Numero de distribuidores participando:
                        <input class="form-control" type="text" id="numDistr" name="numDistr"/>
                    <fieldset>
                        Distribuidor asignado o cotizando:
                        <select name="distribuidorCotizando" id="distribuidorCotizando" class="form-control">
                        <option>seleccionar distribuidor</option>';
            $print08 = $listaDistribuidores;
            $print09 = 'Fecha en que se asignó al distribuidor:
                        <input class="form-control" type="date" id="fechaAsignacionDistribuidor" name="fechaAsignacionDistribuidor">
                        Fecha en que el distribuidor presentó la cotizaión:
                        <input class="form-control" type="date" id="fechaCotizacion" name="fechaCotizacion">
                        Veredicto:
                        <select class="form-control" id="veredicto" name="veredicto">
                                <option></option>
                                <option>perdida usg</option>
                                <option>perdida comex</option>
                                <option>perdida otro</option>
                                <option>ganada</option>
                                <option>compartida</option>
                        </select>
                        Fecha de veredicto:
                        <input class="form-control" type="date" id="fechaVeredicto" name="fechaVeredicto">
                        Notas de seguimiento al distribuidor:
                        <textarea class="form-control" rows="4" id="notasSeguimientoADistribuidor" name="notasSeguimientoADistribuidor" cols="50"></textarea>
                    </fieldset>
                    Volumen estimado de panel:
                    <input class="form-control" type="text" id="volumenEstimadoVentas" name="volumenEstimadoVentas">
                    Estatus del seguimiento al distribuidor (debe irse actualizando):
                    <select class="form-control" id="statusActual" name="statusActual">
                        <option></option>
                        <option>asignada al distribuidor</option>
                        <option>cotizada</option>
                        <option>en espera de veredicto</option>
                        <option>suministrando</option>
                        <option>finalizada</option>
                    </select>
                    Etapa actual de la obra (debe irse actualziando según el avance real de la obra):
                    <select class="form-control" id="etapaActualProyectoVtas" name="etapaActualProyectoVtas">
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
                    Notas de seguimiento de la obra:
                    <textarea class="form-control" rows="4" id="bitacoraSeguimientoVentas" name="bitacoraSeguimientoVentas" cols="50"></textarea>
                </fieldset><br>
                <fieldset><legend>Seguimiento de Servicio al Cliente</legend>
                    Material retirado (hojas de panel):
                    <input class="form-control" type="text" id="materialRetirado" name="materialRetirado">
                    Fecha de retiro
                    <input class="form-control" type="date" id="fechaMaterialRetirado" name="fechaMaterialRetirado">
                </fieldset>
            </form>';
    } 
    else
    {
        if (mysqli_num_rows($resultado) > 0 ) 
        {
            while ($row01 = mysqli_fetch_assoc($resultado))
            {
                $print01 = "<form id='formActProy'>
                                <fieldset class='form-group'><legend>Datos del Proyecto:</legend>
                                    Nombre del Proyecto: 
                                    <input type='text' id='nombre' name='nombre' class='form-control' value='$row01[nombre]' readonly>
                                    ID del proyecto:<br>
                            <input type='text' id='idProyecto' name='idProyecto' size='50' class='form-control' value='$row01[idProyecto]' readonly><br><br>
                                    Clasificacion del proyecto por volumen de hojas:
                                    <select id='clasificacion' name='clasificacion' class='form-control'>
                                        <option>$row01[clasificacion]</option>
                                        <option>A.Grande  - 5,001 a mas   hojas</option><br>
                                        <option>B.Mediano - 2,501 a 5,000 hojas</option><br>
                                        <option>C.Pequeno -   500 a 2,500 hojas</option>
                                    </select>
                                    Sistema constructivo que se va a utilizar en la obra:<br>
                                    <select id='sistemaConstructivo' name='sistemaConstructivo' class='form-control'>
                                        <option>$row01[sistemaConstructivo]</option>
                                        <option>muros divisorios</option><br>
                                        <option>muros exteriores</option><br>
                                        <option>plafones</option><br>
                                        <option>muros divisorios / muros exteriores / plafones</option><br>
                                        <option>muros divisorios / muros exteriores</option><br>
                                        <option>muros divisorios / plafones</option><br>
                                        <option>muros exteriores / plafones</option><br>                
                                    </select>
                                    Calle:
                                    <input class='form-control' type='text' id='calle'name='calle' size=50 value='$row01[calle]'>
                                    Num ext:
                                    <input class='form-control' type='text' id='numeroExterior' name='numeroExterior' size=50 value='$row01[numeroExterior]'>
                                    Num int:
                                    <input class='form-control' type='text' id='numeroInterior' name='numeroInterior' size=50 value='$row01[numeroInterior]'>
                                    Colonia:
                                    <input class='form-control' type='text' id='colonia' name='colonia' size=50 value='$row01[colonia]'>
                                    CP:
                                    <input class='form-control' type='text' id='codigoPostal' name='codigoPostal' size=50 value='$row01[codigoPostal]'>
                                    Municipio / delegacion:
                                    <input class='form-control' type='text' id='municipio' name='municipio' size=50 value='$row01[municipio]'>
                                    Estado:
                                    <select class='form-control' id='estado' name='estado'>
                                        <option>$row01[estado]</option>
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
                                    <select class='form-control' id='zonaFisicaProyecto' name='zonaFisicaProyecto'>
                                        <option>$row01[zonaFisicaProyecto]</option>
                                        <option>norEste</option>
                                        <option>norOste</option>
                                        <option>pacifico</option>
                                        <option>bajio</option>
                                        <option>centro</option>
                                        <option>surEste</option>
                                    </select>
                                    Zona que atiende el proyecto:
                                    <select class='form-control' id='zonaQueAtiendeProyecto' name='zonaQueAtiendeProyecto'>
                                        <option>$row01[zonaQueAtiendeProyecto]</option>
                                        <option>norEste</option>
                                        <option>norOste</option>
                                        <option>pacifico</option>
                                        <option>bajio</option>
                                        <option>centro</option>
                                        <option>surEste</option>
                                    </select>
                                    Coordenadas geograficas de la obra en formato decimal. Ejemplo: 25.668737,-100.3261963<br>
                                    <input class='form-control' type='text' id='coordenadasDeObra' name='coordenadasDeObra' size=50 value='$row01[coordenadasDeObra]'>
                                    Tipo de edificacion:
                                    <select class='form-control' id='tipoEdificacion' name='tipoEdificacion'>
                                        <option>$row01[tipoEdificacion]</option>
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
                                    <select class='form-control' id='fuenteDeAlta' name='fuenteDeAlta'>
                                        <option>$row01[fuenteDeAlta]</option>
                                        <option>panel rey</option>
                                        <option>distribuidor</option>
                                        <option>plaforama</option>
                                        <option>otro</option>
                                    </select>
                                </fieldset>
                                    Etapa de la obra al momento de ser registrada (este dato no debe cambiarse en el futuro):<br>
                                    <select class='form-control' id='etapaProyecto' name='etapaProyecto'>
                                        <option>$row01[etapaProyecto]</option>
                                        <option>proyecto</option>
                                        <option>movimiento de tierras</option>
                                        <option>cimentacion</option>
                                        <option>estructura</option>
                                        <option>fachada</option>
                                        <option>acabados</option>
                                        <option>detenida temporalmente</option>
                                        <option>cancelada</option>
                                    </select>
                                <fieldset class='form-group'>
                                    <legend>Despacho Encargado</legend>
                                    Seleccionar el despacho con quien tenemos entrada a la obra:<br>
                                    <select class='selectpicker' data-live-search='true' id='busquedaDespacho' name='busquedaDespacho'>
                                    <option>$row01[despachoEncargado]</option>";
            $print02 = $listaDespachos;
            $print03 = "<button class='btn btn-secondary' type='button' id='btnDespachoNuevo'name='btnDespachoNuevo'>crear despacho</button>
                        </fieldset><br>
                        <fieldset><legend>Seguimiento de Ingeniería</legend>
                            Asesor de Ingenieria encargado de dar seguimiento:
                            <select name='asesorIngenieria' id='asesorIngenieria' class='form-control'>;
                        <option>$row01[asesorIngenieria]</option>";
            $print04 = $listaAsesores;
            $print05 = "Volumen estimado de panel:
                        <input class='form-control' type='text' id='volumenEstimadoIngenieria' name='volumenEstimadoIngenieria' value='$row01[volumenEstimadoIngenieria]'>
                        Fecha en que se pasó a ventas:
                        <input class='form-control' type='date' id='fechaAVentas' name='fechaAVentas' value='$row01[fechaAVentas]'>
                        Etapa actual de la obra: (debe irse modificando según sea el avance real en la obra)
                        <select class='form-control' id='etapaActualProyectoIng' name='etapaActualProyectoIng'>
                            <option>$row01[etapaActualProyectoIng]</option>
                            <option>proyecto</option>
                            <option>movimiento de tierras</option>
                            <option>cimentacion</option>
                            <option>estructura</option>
                            <option>fachada</option>
                            <option>acabados</option>
                            <option>detenida temporalmente</option>
                            <option>cancelada</option>
                        </select>
                        Seguimiento de Obra por parte de Ingeniería:<br>
                        <textarea class='form-control' rows='4' id='bitacoraSeguimientoIngenieria' name='bitacoraSeguimientoIngenieria' cols='50'>$row01[bitacoraSeguimientoIngenieria]</textarea>
                    </fieldset><br>
                    <fieldset><legend>Seguimiento de Ventas</legend>
                        Ejecutivo de Ventas encargado de dar seguimiento:
                        <select name='ejecutivoVentas' id='ejecutivoVentas' class='form-control'>;
                        <option>$row01[ejecutivoVentas]</option>";
            $print06 = $listaEjecutivos;
            $print07 = "Fecha de recepción de obra por parte de ingeniería:
                        <input class='form-control' type='date' id='fechaRecepcionObraPorVentas' name='fechaRecepcionObraPorVentas' value='$row01[fechaRecepcionObraPorVentas]'>
                        Numero de distribuidores participando:
                        <input type='text' id='numeroDistribuidoresPart' name='numeroDistribuidoresPart' value='$row01[numeroDistribuidoresPart]' class='form-control'>
                    <fieldset>
                        Distribuidor asignado o cotizando:
                        <select name='distribuidorCotizando' id='distribuidorCotizando' class='form-control'>
                        <option>$row01[distribuidorCotizando]</option>";
            $print08 = $listaDistribuidores;
            $print09 = "Fecha en que se asignó al distribuidor:
                        <input class='form-control' type='date' id='fechaAsignacionDistribuidor' name='fechaAsignacionDistribuidor'>
                        Fecha en que el distribuidor presentó la cotizaión:
                        <input class='form-control' type='date' id='fechaCotizacion' name='fechaCotizacion' value='$row01[fechaCotizacion]'>
                        Veredicto:
                        <select class='form-control' id='veredicto' name='veredicto'>
                                <option>$row01[veredicto]</option>
                                <option>perdida usg</option>
                                <option>perdida comex</option>
                                <option>perdida otro</option>
                                <option>ganada</option>
                                <option>compartida</option>
                        </select>
                        Fecha de veredicto:
                        <input class='form-control' type='date' id='fechaVeredicto' name='fechaVeredicto' value='$row01[fechaDeVeredicto]'>
                        Notas de seguimiento al distribuidor:
                        <textarea class='form-control' rows='4' id='notasSeguimientoADistribuidor' name='notasSeguimientoADistribuidor' cols='50'>$row01[notasSeguimientoADistribuidor]</textarea>
                    </fieldset>
                    Volumen estimado de panel:
                    <input class='form-control' type='text' id='volumenEstimadoVentas' name='volumenEstimadoVentas' value='$row01[volumenEstimadoVentas]'>
                    Estatus del seguimiento al distribuidor (debe irse actualizando):
                    <select class='form-control' id='statusActual' name='statusActual'>
                        <option></option>
                        <option>asignada al distribuidor</option>
                        <option>cotizada</option>
                        <option>en espera de veredicto</option>
                        <option>suministrando</option>
                        <option>finalizada</option>
                    </select>
                    Etapa actual de la obra (debe irse actualziando según el avance real de la obra):
                    <select class='form-control' id='etapaActualProyectoVtas' name='etapaActualProyectoVtas' value='$row01[etapaActualProyectoVtas]'>
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
                    Notas de seguimiento de la obra:
                    <textarea class='form-control' rows='4' id='bitacoraSeguimientoVentas' name='bitacoraSeguimientoVentas' cols='50'>$row01[bitacoraSeguimientoVentas]</textarea>
                </fieldset><br>
                <fieldset><legend>Seguimiento de Servicio al Cliente</legend>
                    Material retirado (hojas de panel):
                    <input class='form-control' type='text' id='materialRetirado' name='materialRetirado'>
                    Fecha de retiro
                    <input class='form-control' type='date' id='fechaMaterialRetirado' name='fechaMaterialRetirado'>
                </fieldset>
            </form>";
            }
        } 
        else 
        {
        $print01 = '<form id="formActProy">
                        <fieldset class="form-group"><legend>Datos del Proyecto:</legend>
                            Nombre del Proyecto: [ESTE PROYECTO NO EXISTE]
                            <input type="text" id="nombre" name="nombre" class="form-control">
                            ID del proyecto:<br>
                            <input type="text" id="idProyecto" name="idProyecto" size="50" class="form-control"><br><br>
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
                        <fieldset class="form-group">
                            <legend>Despacho Encargado</legend>
                            Seleccionar el despacho con quien tenemos entrada a la obra:<br>
                            <select class="selectpicker" data-live-search="true" id="busquedaDespacho" name="busquedaDespacho">
                            <option>seleccionar despacho</option>';
            $print02 = $listaDespachos;
            $print03 = '<button class="btn btn-secondary" type="button" id="btnDespachoNuevo" name="btnDespachoNuevo">crear despacho</button>
                        </fieldset><br>
                        <fieldset><legend>Seguimiento de Ingeniería</legend>
                            Asesor de Ingenieria encargado de dar seguimiento:
                            <select name="asesorIngenieria" id="asesorIngenieria" class="form-control">
                            <option>seleccionar asesor</option>';
            $print04 = $listaAsesores;
            $print05 = 'Volumen estimado de panel:
                        <input class="form-control" type="text" id="volumenEstimadoIngenieria" name="volumenEstimadoIngenieria">
                        Fecha en que se pasó a ventas:
                        <input class="form-control" type="date" id="fechaAVentas" name="fechaAVentas">
                        Etapa actual de la obra: (debe irse modificando según sea el avance real en la obra)
                        <select class="form-control" id="etapaActualProyectoIng" name="etapaActualProyectoIng">
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
                        Seguimiento de Obra por parte de Ingeniería:<br>
                        <textarea class="form-control" rows="4" id="bitacoraSeguimientoIngenieria" name="bitacoraSeguimientoIngenieria" cols="50"></textarea>
                    </fieldset><br>
                    <fieldset><legend>Seguimiento de Ventas</legend>
                        Ejecutivo de Ventas encargado de dar seguimiento:
                        <select name="ejecutivoVentas" id="ejecutivoVentas" class="form-control">
                            <option>seleccionar ejecutivo</option>';
            $print06 = $listaEjecutivos;
            $print07 = 'Fecha de recepción de obra por parte de ingeniería:
                        <input class="form-control" type="date" id="fechaRecepcionObraPorVentas" name="fechaRecepcionObraPorVentas">
                        Numero de distribuidores participando:
                        <input class="form-control" type="text" id="numDistr" name="numDistr"/>
                    <fieldset>
                        Distribuidor asignado o cotizando:
                        <select name="distribuidorCotizando" id="distribuidorCotizando" class="form-control">
                        <option>seleccionar distribuidor</option>';
            $print08 = $listaDistribuidores;
            $print09 = 'Fecha en que se asignó al distribuidor:
                        <input class="form-control" type="date" id="fechaAsignacionDistribuidor" name="fechaAsignacionDistribuidor">
                        Fecha en que el distribuidor presentó la cotizaión:
                        <input class="form-control" type="date" id="fechaCotizacion" name="fechaCotizacion">
                        Veredicto:
                        <select class="form-control" id="veredicto" name="veredicto">
                                <option></option>
                                <option>perdida usg</option>
                                <option>perdida comex</option>
                                <option>perdida otro</option>
                                <option>ganada</option>
                                <option>compartida</option>
                        </select>
                        Fecha de veredicto:
                        <input class="form-control" type="date" id="fechaVeredicto" name="fechaVeredicto">
                        Notas de seguimiento al distribuidor:
                        <textarea class="form-control" rows="4" id="notasSeguimientoADistribuidor" name="notasSeguimientoADistribuidor" cols="50"></textarea>
                        <textarea class="form-control" rows="4" id="notasIngenieria" name="notasIngenieria" cols="50"></textarea>
                    </fieldset>
                    Volumen estimado de panel:
                    <input class="form-control" type="text" id="volumenEstimadoVentas" name="volumenEstimadoVentas">
                    Estatus del seguimiento al distribuidor (debe irse actualizando):
                    <select class="form-control" id="statusActual" name="statusActual">
                        <option></option>
                        <option>asignada al distribuidor</option>
                        <option>cotizada</option>
                        <option>en espera de veredicto</option>
                        <option>suministrando</option>
                        <option>finalizada</option>
                    </select>
                    Etapa actual de la obra (debe irse actualziando según el avance real de la obra):
                    <select class="form-control" id="etapaActualProyectoVtas" name="etapaActualProyectoVtas">
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
                    Notas de seguimiento de la obra:
                    <textarea class="form-control" rows="4" id="bitacoraSeguimientoVentas" name="bitacoraSeguimientoVentas" cols="50"></textarea>
                </fieldset><br>
                <fieldset><legend>Seguimiento de Servicio al Cliente</legend>
                    Material retirado (hojas de panel):
                    <input class="form-control" type="text" id="materialRetirado" name="materialRetirado">
                    Fecha de retiro
                    <input class="form-control" type="date" id="fechaMaterialRetirado" name="fechaMaterialRetirado">
                </fieldset>
            </form>';
        }
    }
    $print = $print01.$print02.$print03.$print04.$print05.$print06.$print07.$print08.$print09;
    echo $print;
    mysqli_close($conexionBd);
}

?>