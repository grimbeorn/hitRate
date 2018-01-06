// despliega los datos de la ACTIVIDAD
$(document).ready(function(){
	$('#busqueda').focus()
	$('#busqueda').on('keyup',function()
	{
		var busqueda = $('#busqueda').val()
		$.ajax({
			type:'POST',
			url:'../php/buscarActividad.php',
			data: {'busqueda': busqueda}
		})
		.done(function(res)
		{
			$('#formActualizacionAct').html(res)
		})
		.fail(function(){
			alert("error")
		})
	})
})

// despliega la lista de los ASESORES
$(document).ready(function(){
		$.ajax({
			type:'POST',
			url:'../php/buscarActividad-Asesor.php',
			data: {'peticion': 'cargaListas'}
		})
		.done(function(resul){
			$('#asesorIngenieria').html(resul)
		})
		.fail(function(){
			alert("error")
		})
})