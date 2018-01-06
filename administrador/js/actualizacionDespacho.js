$(document).ready(function()
{
	$('#btnActualizar').click(function(){
		var dat = $('#formActDesp').serialize();
		console.log(dat);
		$.ajax({
			type:"POST",
			url:"../php/actualizacionDespacho.php",
			data: dat,
			success: function(r){
				if(r==1){
					alert("despacho actualizado correctamente");
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