<?php
	// session_start();
	require 'conexion.php';
	$query = "SELECT idProyecto, nombre, despachoEncargado, asesorIngenieria, bitacoraSeguimientoIngenieria, ejecutivoVentas, bitacoraSeguimientoVentas FROM proyectos";
    $resul = mysqli_query($conexionBd, $query);
?>

<br><br>
<div class="row">
	<div class="col-sm-8"></div>
	<div class="col-sm-4">
		<label>buscador:</label>
		<select id="buscadorvivo" class="form-control input-sm">
			<option value="0">seleccionar proyecto</option>
			<?php 
				while($ver=mysqli_fetch_row($resul)):
			?>
			<option value="<?php echo $ver[0] ?>">
				<?php echo $ver[1] ?>
			</option>
			<?php endwhile;?>
		</select>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$('#buscadorvivo').select2();
		$('#buscadorvivo').change(function(){
			$.ajax({
				type:"post",
				data:"valor=" + $('#buscadorvivo').val(),
				url: "../php/crearSesion.php",
				success:function(r){
					$('#tabla').load('../php/seguimientoProyectos.php');
				}
			});
		});
	});
</script>


