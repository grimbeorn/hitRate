// despliega los datos del PROYECTO
$(document).ready(function(){
	$('#busqueda').focus()
	$('#busqueda').on('keyup',function()
	{
		var busqueda = $('#busqueda').val()
		$.ajax({
			type:'POST',
			url:'../php/buscarProyecto.php',
			data: {'busqueda': busqueda}
		})
		.done(function(r)
		{
			$('#formActProy').html(r)
			//console.log(r)
		})
		.fail(function(){
			alert("error")
		})
	})
})

// despliega la lista de los DESPACHOS
$(document).ready(function(){
		$.ajax({
			type:'POST',
			url:'../php/buscarProyecto-Despacho.php',
			data: {'peticionDesp': 'cargaListasDesp'}
		})
		.done(function(res){
			$('#busquedaDespacho').html(res)
			//console.log(res)
		})
		.fail(function(){
			alert("error")
		})
})

// despliega la lista de los ASESORES
$(document).ready(function(){
		$.ajax({
			type:'POST',
			url:'../php/buscarProyecto-Asesor.php',
			data: {'peticionAs': 'cargaListasAs'}
		})
		.done(function(resul){
			$('#asesorIngenieria').html(resul)
		})
		.fail(function(){
			alert("error")
		})
})

// despliega la lista de los EJECUTIVOS
$(document).ready(function(){
		$.ajax({
			type:'POST',
			url:'../php/buscarProyecto-Ejecutivo.php',
			data: {'peticionEj': 'cargaListasEj'}
		})
		.done(function(resultado){
			$('#ejecutivoVentas').html(resultado)
		})
		.fail(function(){
			alert("error")
		})
})

// despliega la lista de los DISTRIBUIDORES
$(document).ready(function(){
		$.ajax({
			type:'POST',
			url:'../php/buscarProyecto-Distribuidor.php',
			data: {'peticionDi': 'cargaListasDi'}
		})
		.done(function(resul){
			$('#distribuidorCotizando').html(resul)
		})
		.fail(function(){
			alert("error")
		})
})