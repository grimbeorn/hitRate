<?php

require 'conexion.php';
$idProyecto = $_POST['idProyecto'];
$query = "DELETE FROM proyectos WHERE idProyecto='$idProyecto'";
echo $result=mysqli_query($conexionBd, $query);

?>