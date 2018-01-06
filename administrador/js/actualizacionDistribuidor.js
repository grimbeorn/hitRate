$(document).ready(function()
{
	$('#btnActualizar').click(function(){
		var dat = $('#formActDist').serialize();
		$.ajax({
			type:"POST",
			url:"../php/actualizacionDistribuidor.php",
			data: dat,
			success: function(r){
				if(r==1){
					alert("distribuidor actualizado correctamente");
				}else{
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