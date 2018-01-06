<?php
//function conexion()
//{
    //PHP PARA PERMITIR ACCESO A USUARIOS EXISTENTES
    //**************************PARaMETROS CONEXIoN******************
    define ('usuarioBd', 'root');
    define ('contrasenaBd', '');
    define ('hostBd', 'localhost');
    define ('nombreBd', 'hitrate.01');
    //***************************************************************
    //**************************CONEXIoN A BASE DE DATOS*************
    $conexionBd = mysqli_connect(hostBd,usuarioBd,contrasenaBd,nombreBd);
    if (!$conexionBd) 
    {
        die("Error en la conexion a la base de datos: " . mysqli_error($conexionBd));
        exit();
    }
    $seleccionBd = mysqli_select_db($conexionBd, nombreBd);
    if (!$seleccionBd) 
    {
        die("Error en la seleccion de la base de datos: " . mysqli_error($conexionBd));
        exit();
    }
    //**************************************************************
//}
?>