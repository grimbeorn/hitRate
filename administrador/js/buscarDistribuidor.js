// despliega los datos del DISTRIBUIDOR
$(document).ready(function(){
	$('#busqueda').focus()
	$('#busqueda').on('keyup',function()
	{
		var busqueda = $('#busqueda').val()
		$.ajax({
			type:'POST',
			url:'../php/buscarDistribuidor.php',
			data: {'busqueda': busqueda}
		})
		.done(function(res)
		{
			$('#formActDist').html(res)
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
			url:'../php/buscarDistribuidor-Asesor.php',
			data: {'peticion': 'cargaListas'}
		})
		.done(function(resul){
			$('#asesorIngenieria').html(resul)
		})
		.fail(function(){
			alert("error")
		})
})

// despliega la lista de los EEJECUTIVOS
$(document).ready(function(){
		$.ajax({
			type:'POST',
			url:'../php/buscarDistribuidor-Ejecutivo.php',
			data: {'peticion': 'cargaListas'}
		})
		.done(function(resultado){
			$('#ejecutivoVentas').html(resultado)
		})
		.fail(function(){
			alert("error")
		})
})