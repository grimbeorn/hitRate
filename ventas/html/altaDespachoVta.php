<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>actualizacion Despacho</title>
</head>

<body>
<fieldset>
<form method="post" action="">
<fieldset>
    <legend>Datos del Despacho</legend><br>
    <fieldset>
    <legend>Dirección:</legend>
    Nombre:<br>
    <input type="text" name="nombre"><br>
    calle:<br>
    <input type="text" name="calle" size=50><br>
    num ext:<br>
    <input type="text" name="numeroExterior"><br>
    num int:<br>
    <input type="text" name="numeroInterior">
    <br>
    colonia:<br>
    <input type="text" name="colonia" size=50>
    <br>
    cp:<br>
    <input type="text" name="codigoPostal" size=50>
    <br>
    municipio / delegacion:<br>
    <input type="text" name="municipio" size=50>
    <br>
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
    </select><br>
    Giro del despacho:<br>
    <select name="giroDespacho">
        <option></option>
        <option>inversionista</option><br>
        <option>project manager</option><br>
        <option>supervision de obra</option><br>
        <option>desarrollador</option><br>
        <option>constructor</option><br>
        <option>despacho de arquitectos</option><br>
        <option>contratista</option><br>
        <option>instalador</option><br>
        <option>otro / varios</option><br>
    </select><br><br>
</fieldset><br>

<fieldset>
        <legend>Contacto 01:</legend>
        Nombre del Contacto:<br>
        <input type="text" name="nombreContacto01"><br>
        Teléfono 01:<br>
        <input type="text" name="telefono01Contacto01"><br>
        Teléfono02:<br>
        <input type="text" name="telefono02Contacto01"><br>
        Correo:<br>
        <input type="text" name="correoContacto01"><br>
</fieldset><br>

<fieldset>
    <legend>Contacto 02:</legend>
    Nombre del Contacto:<br>
    <input type="text" name="nombreContacto02"><br>
    Teléfono 01:<br>
    <input type="text" name="telefono01Contacto02"><br>
    Teléfono02:<br>
    <input type="text" name="telefono02Contacto02"><br>
    Correo:<br>
    <input type="text" name="correoContacto02"><br>
</fieldset><br>

<fieldset>
        <legend>Notas:</legend>
        <input type="text" name="notas" size="100">
</fieldset><br>

<input type="submit" name="btnGuardar" value="guardar">
<input type="submit" name="btnSalir" value="salir">


</fieldset>
</form>
</body>


</html>