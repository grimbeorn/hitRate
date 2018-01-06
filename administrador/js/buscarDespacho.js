$(document).ready(function(){
	$('#busqueda').focus()
	$('#busqueda').on('keyup',function()
	{
		var busqueda = $('#busqueda').val()
		$.ajax({
			type:'POST',
			url:'../php/buscarDespacho.php',
			data: {'busqueda': busqueda}
		})
		.done(function(resultado)
		{
			$('#formActDespacho').html(resultado)
		})
		.fail(function()
		{
			alert("error")
		})
	})
})