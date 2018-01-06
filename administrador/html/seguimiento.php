<?php 
session_start(); 
unset($_SESSION['consulta']);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Seguimiento</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <script src="../js/jquery-3.2.1.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Barlow|Roboto" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../_librerias/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="../../_librerias/select2/css/select2.css">
    <link rel="stylesheet" type="text/css" href="../../_librerias/css/themes/default.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>
    <script src="../../_librerias/alertify.js"></script>
    <script src="../../_librerias/select2/js/select2.js"></script>
    <link rel="stylesheet" href="../css/seguimiento.css" />
</head>
<body>
    <!-- CABECERA -->
    <header>
        <div class="container">
            <section class="row">
                <h5 class="col-xs-12 col-sm-9 col-md-9" id="idUser">usuario: <?php echo $_SESSION['user']['usuario']?></h5>
                <img class="col-xs-08 col-sm-3 col-md-3" id="logo" src="../../_imgs/logo.png" width="150" height="50" alt="logotipoPanelRey">
            </section>
        </div>
    </header>
        
        <div class="container">
        	<div id="buscador"></div>
        	<div id="tabla"></div>
        </div>

        <div class="container">
	        <button class="btn btn-primary" type="button" id="btnVolver">Volver</button>
    	    <button class="btn btn-primary" type="button" id="btnSalir">Salir</button>
        </div>

        <!-- Modal para PROYECTOS NUEVOS -->
		<!-- <div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="myModalLabel">Agregar Proyecto</h4>
		      </div>
		      <div class="modal-body">
		      	<label>Proyecto</label>
		      	<input type="text" name="" id="nombre" class="form-control input-sm">
		      	<label>Despacho Encargado</label>
		      	<input type="text" name="" id="despachoEncargado" class="form-control input-sm">
		      	<label>Asesor Ingeniería</label>
		      	<input type="text" name="" id="asesorIngenieria" class="form-control input-sm">
		      	<label>Notas Ingenieria</label>
		      	<input type="text" name="" id="bitacoraSeguimientoIngenieria" class="form-control input-sm">
		      	<label>Ejecutivo Ventas</label>
		      	<input type="text" name="" id="ejecutivoVentas" class="form-control input-sm">
		      	<label>Notas Ventas</label>
		      	<input type="text" name="" id="bitacoraSeguimientoVentas" class="form-control input-sm">
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-primary" data-dismiss="modal">Agregar</button>
		      </div>
		    </div>
		  </div>
		</div> -->

		<!-- Modal para EDITAR PROYECTOS -->
		<div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="myModalLabel">Editar Proyecto</h4>
		      </div>
		      <div class="modal-body">
		      	<label>Id Proyecto</label>
		      	<input type="text" name="" id="idProyectou" class="form-control input-sm" readonly="">
		      	<label>Proyecto</label>
		      	<input type="text" name="" id="nombreu" class="form-control input-sm" readonly="">
		      	<label>Despacho Encargado</label>
		      	<input type="text" name="" id="despachoEncargadou" class="form-control input-sm" readonly="">
		      	<label>Asesor Ingeniería</label>
		      	<input type="text" name="" id="asesorIngenieriau" class="form-control input-sm" readonly="">
		      	<label>Notas Ingenieria</label>
		      	<input type="text" name="" id="bitacoraSeguimientoIngenieriau" class="form-control input-sm">
		      	<label>Ejecutivo Ventas</label>
		      	<input type="text" name="" id="ejecutivoVentasu" class="form-control input-sm" readonly="">
		      	<label>Notas Ventas</label>
		      	<input type="text" name="" id="bitacoraSeguimientoVentasu" class="form-control input-sm">
		      </div>
		      <div class="modal-footer">
		        <button id="actualizarDatos" type="button" class="btn btn-warning" data-dismiss="modal">Guardar</button>
		      </div>
		    </div>
		  </div>
		</div>

        <script src="../js/seguimiento.js"></script>
</body>
</html>



