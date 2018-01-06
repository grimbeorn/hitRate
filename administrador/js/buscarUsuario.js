$(document).ready(function(){
	$('#busqueda').focus()
	$('#busqueda').on('keyup',function()
	{
		var busqueda = $('#busqueda').val()
		$.ajax({
			type:'POST',
			url:'../php/buscarUsuario.php',
			data: {'busqueda': busqueda}
		})
		.done(function(resultado)
		{
			$('#formActualizacion').html(resultado)
		})
		.fail(function()
		{
			alert("error")
		})
	})
})