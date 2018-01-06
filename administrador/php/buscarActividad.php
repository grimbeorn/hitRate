<?php 

if(isset($_POST['busqueda'])) 
{
    busquedaDeActividad();
} else {
    echo "error";
}

function busquedaDeActividad()
{
    require 'conexion.php';
    $listaAsesores="";
    $print = "";
    $print01 = "";
    $print02 = "";
    $print03 = "";

    // query ASESOR
    $queryAsesores = "SELECT usuario FROM usuarios WHERE area='ingenieria' ";
    $resultAsesores = mysqli_query($conexionBd, $queryAsesores);
    while($rowAsesores = mysqli_fetch_assoc($resultAsesores))
    {
        $listaAsesores .= "<option>$rowAsesores[usuario]</option>";
    }
    $listaAsesores.= '</select><br>';

    $search = mysqli_real_escape_string($conexionBd, $_POST['busqueda']);
    $query = "SELECT idActividad, nombreActividad, tipoActividad, asesorIngenieria, zona, fechaDeAtencion, seguimiento FROM actividadingenieria WHERE nombreActividad LIKE '%".$search."%' ";
    $resultado = mysqli_query($conexionBd, $query);

    if($_POST['busqueda'] == "")
    {
        $print01 = '<form id="formAltaAct">
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
                            <select class="form-control" id="asesorIngenieria" name="asesorIngenieria">';
                            $print02 = $listaAsesores;
            $print03 =     '<br>zona:<br>
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
                    </form>';
    } 
    else
    {
        if (mysqli_num_rows($resultado) > 0 ) 
        {
            while ($row01 = mysqli_fetch_assoc($resultado))/*value='$row01[nombreActividad]'*/
            {
            $print01 = "<form id='formAltaAct'>
                            <fieldset class='form-group'><legend>Actividad</legend>
                                Nombre de la actividad:
                                <input class='form-control' type='text' id='nombreActividad' name='nombreActividad' size='41' value='$row01[nombreActividad]' readonly>
                                Actividad:
                                <select class='form-control' id='tipoAtividad' name='tipoActividad' value='$row01[nombreActividad]'>
                                    <option></option>
                                    <option>curso</option>
                                    <option>visita</option>
                                    <option>asistencia tecnica</option>
                                    <option>otro</option>
                                </select>
                                Asesor encargado:
                                <select class='form-control' id='asesorIngenieria' name='asesorIngenieria' value='$row01[nombreActividad]'>";
                                    $print02 = $listaAsesores;
            $print03 =     "<br>zona:<br>
                            <select class='form-control' id='zona' name='zona' value='$row01[zona]'>
                                <option>norEste</option>
                                <option>norOste</option>
                                <option>pacifico</option>
                                <option>bajio</option>
                                <option>centro</option>
                                <option>surEste</option>
                            </select>
                            fecha en que fue atendida la actividad:
                            <input class='form-control' type='date' name='fechaDeAtencion' value='$row01[fechaDeAtencion]'>
                            Bitácora de Seguimiento:
                            <textarea class='form-control' id='seguimiento' name='seguimiento' value='$row01[seguimiento]'></textarea><br>
                        </fieldset>
                    </form>";
            }
        } 
        else 
        {
            $print01 = '<form id="formAltaAct">
                        <fieldset class="form-group"><legend>Actividad</legend>
                            Nombre de la actividad: [ESTA ACTIVIDAD NO EXISTE]
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
                            <select class="form-control" id="asesorIngenieria" name="asesorIngenieria">';
                            $print02 = $listaAsesores;
            $print03 =     '<br>zona:<br>
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
                    </form>';
        }
    }
    $print = $print01.$print02.$print03;
    echo $print;
    mysqli_close($conexionBd);
}

?>