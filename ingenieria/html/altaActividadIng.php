<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <title>alta Actividad. Administrador</title>
</head>

<body>
<fieldset>
    <fieldset><legend>Actividad</legend><br>
        <form method="post" action="">
        Nombre de la actividad: <br>
        <input type="text" name="nombre" size="41"><br><br>
        Actividad:<br>
        <select name="actividad">
            <option></option>
            <option>curso</option><br>
            <option>visita</option><br>
            <option>asistencia tecnica</option><br>
            <option>otro</option><br>
        </select><br><br>
        Asesor encargado: <br>
        <select name="asesor">
            <option>**seleccionar de los usuarios de la base de datos**</option><br>
        </select><br><br>
        zona:<br>
        <select name="zona">
            <option>norEste</option>
            <option>norOste</option>
            <option>pacifico</option>
            <option>bajio</option>
            <option>centro</option>
            <option>surEste</option>
        </select><br><br>
        fecha en que fue atendida la actividad:<br>
        <input type="text" name="fechaDeAtencion"><br><br>
        
        Bitácora de Seguimiento:<br>
        <input type="text" name="seguimiento" size="41"><br><br>
        </form>
        <input type="submit" name="btnGuardar" value="guardar">
        <input type="submit" name="btnSalir" value="salir">
    </fieldset>
</fieldset>

</body>
</html>