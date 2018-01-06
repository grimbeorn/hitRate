jQuery(document).on('submit','#formlg', function(event){
	event.preventDefault();

	jQuery.ajax({
		url: '../php/login.php',
		type:'POST',
		dataType: 'json',
		data: $(this).serialize(),
		beforeSend: function(){
			$('.botonlg').val('validando...');
		}
	})
	.done(function(respuesta) {
		if(!respuesta.error){
			if(respuesta.privilegios == "administrador"){
				location.href = '../../administrador/html/panelAdmin.php';		
			}else if(respuesta.privilegios == "ingenieria local"){
				location.href = '../../ingenieria/html/accesoIngenieria.php';
			}else if(respuesta.privilegios == "ingenieria nacional"){
				location.href = '../../ingenieria/html/accesoIngenieria.php';
			}else if(respuesta.privilegios == "ventas local"){
				location.href = '../../ventas/html/accesoVentas.php';
			}else if(respuesta.privilegios == "ventas nacional"){
				location.href = '../../ventas/html/accesoVentas.php';
			}else if(respuesta.privilegios == "servicio a cliente"){
				location.href = '../../servicio/html/accesoServicio.php';
			}
		} else {
			$('.error').slideDown('slow');
			setTimeout(function(){
				$('.error').slideUp('slow');
			},1000);
			$('.botonlg').val('iniciar sesión');
		}
	})
	.fail(function(resp) {
		console.log(resp.responseText);
	})
	.always(function() {
		console.log("complete");
	});
});