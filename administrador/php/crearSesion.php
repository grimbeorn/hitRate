<?php

session_start();
$idProyecto=$_POST['valor'];
$_SESSION['consulta']=$idProyecto;
echo $idProyecto;

?>