$(document).ready(function()
{
	$('#btnActualizar').click(function(){
		var dat = $('#formActualizacion').serialize();
		// console.log(dat);
		$.ajax({
			type:"POST",
			url:"../php/actualizacionUsuario.php",
			data: dat,
			success: function(r){
				if(r==1){
					alert("usuario actualizado correctamente");
					//console.log(r);
				}else{
					//console.log(r);
					alert("hubo un error");
				}
			}
		});
		return false;
	});

	$('#btnVolver').click(function(){
		location.href="../html/panelAdmin.php";
	});

	$('#btnSalir').click(function(){
		location.href="../../acceso/php/logout.php";
	});

});
