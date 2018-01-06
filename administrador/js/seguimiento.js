// alert("funcionando");
$(document).ready(function(){
    $('#tabla').load('../php/seguimientoProyectos.php');
    $('#buscador').load('../php/buscadorTiempoReal.php');
    $('#actualizarDatos').click(function(){
    	actualizarDatos();
    });

    $('#btnVolver').click(function(){
		location.href="../html/panelAdmin.php";
	});

	$('#btnSalir').click(function(){
		location.href="../../acceso/php/logout.php";
	});
})

function agregarDatos(datos){
	d=datos.split('||');
	$('#idProyectou').val(d[0]);
	$('#nombreu').val(d[1]);
	$('#despachoEncargadou').val(d[2]);
	$('#asesorIngenieriau').val(d[3]);
	$('#bitacoraSeguimientoIngenieriau').val(d[4]);
	$('#ejecutivoVentasu').val(d[5]);
	$('#bitacoraSeguimientoVentasu').val(d[6]);
}

function actualizarDatos(){
	idProyecto=$('#idProyectou').val();
	nombre=$('#nombreu').val();
	despachoEncargado=$('#despachoEncargadou').val();
	asesorIngenieria=$('#asesorIngenieriau').val();
	bitacoraSeguimientoIngenieria=$('#bitacoraSeguimientoIngenieriau').val();
	ejecutivoVentas=$('#ejecutivoVentasu').val();
	bitacoraSeguimientoVentas=$('#bitacoraSeguimientoVentasu').val();
	data= "idProyecto="+idProyecto+
			"&nombre="+nombre+
			"&despachoEncargado="+despachoEncargado+
			"&asesorIngenieria="+asesorIngenieria+
			"&bitacoraSeguimientoIngenieria="+bitacoraSeguimientoIngenieria+
			"&ejecutivoVentas="+ejecutivoVentas+
			"&bitacoraSeguimientoVentas="+bitacoraSeguimientoVentas;
	$.ajax({
		type:"POST",
		url:"../php/actualizacionProyectoModal.php",
		data: data,
		success: function(r){
			if(r==1){
				$('#tabla').load('../php/seguimientoProyectos.php');
				$('#buscador').load('../php/buscadorTiempoReal.php');
				alert("despacho actualizado correctamente");
			}else{
				alert("hubo un error");
			}
		}
	});
}

function preguntaBorrado(idProyecto){
	alertify.confirm('Eliminar Proyecto', '¿Quieres borrar este Proyecto?', function(){ eliminarProyecto(idProyecto) }
                , function(){ alertify.error('Cancel')});
}

function eliminarProyecto(idProyecto) {
	cadena="idProyecto="+idProyecto;
	$.ajax({
		type: 'POST',
		url: '../php/eliminarProyecto.php',
		data: cadena,
		success: function(r){
			if(r==1){
				$('#tabla').load('../php/seguimientoProyectos.php');
				alertify.success("Proyecto Eliminado!!");
			}
			else
			{
				alertify.error("error en el servidor");
			}
		}
	});
}