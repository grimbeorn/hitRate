<?php 
session_start();
require_once 'conexion.php';
?>

        <div class="row">
        	<div class="col-sm-12">
        	<h2>Seguimiento Proyectos</h2>
        		<table class="table table-hover table-condensed table-bordered">
        		<!-- <caption>
        			<button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">Agregar Proyecto
        				<span class="glyphicon glyphicon-plus"></span>
        			</button>
        		</caption> -->
        			<tr>
        				<td>Id Proyecto</td>
        				<td>Proyecto</td>
        				<td>Despacho Encargado</td>
        				<td>Asesor Ingeniería</td>
        				<td>Notas Ingeniería</td>
        				<td>Ejecutivo Ventas</td>
        				<td>Notas Ventas</td>
        				<td>Editar</td>
        				<td>Eliminar</td>
        			</tr>

        			<?php
                    if(isset($_SESSION['consulta']))
                    {
                            if($_SESSION['consulta'] > 0)
                            {
                                    $idp=$_SESSION['consulta'];
                                    $query = "SELECT idProyecto, nombre, despachoEncargado, asesorIngenieria, bitacoraSeguimientoIngenieria, ejecutivoVentas, bitacoraSeguimientoVentas FROM proyectos WHERE idProyecto='$idp'";
                            }
                            else
                            {
                                    $query = "SELECT idProyecto, nombre, despachoEncargado, asesorIngenieria, bitacoraSeguimientoIngenieria, ejecutivoVentas, bitacoraSeguimientoVentas FROM proyectos";
                            }
                    }
                    else 
                    {
                            $query = "SELECT idProyecto, nombre, despachoEncargado, asesorIngenieria, bitacoraSeguimientoIngenieria, ejecutivoVentas, bitacoraSeguimientoVentas FROM proyectos";
                    }
        			$resul = mysqli_query($conexionBd, $query);
        			while ($ver=mysqli_fetch_row($resul)) {
        				$datos=	$ver[0]."||".
        						$ver[1]."||".
        						$ver[2]."||".
        						$ver[3]."||".
        						$ver[4]."||".
        						$ver[5]."||".
        						$ver[6];
        			?>

        			<tr>
        				<td><?php echo $ver[0]?></td>
        				<td><?php echo $ver[1]?></td>
        				<td><?php echo $ver[2]?></td>
        				<td><?php echo $ver[3]?></td>
        				<td><?php echo $ver[4]?></td>
        				<td><?php echo $ver[5]?></td>
        				<td><?php echo $ver[6]?></td>
        				<td>
        					<button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEdicion" onclick="agregarDatos('<?php echo $datos?>')"></button>
        				</td>
        				<td>
        					<button class="btn btn-danger glyphicon glyphicon-trash" onclick="preguntaBorrado('<?php echo $ver[0]?>')"></button>
        				</td>
        			</tr>
        			<?php
        			}
        			?>
        		</table>
        	</div>
        </div>