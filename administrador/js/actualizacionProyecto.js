$(document).ready(function()
{
	$('#btnActualizar').click(function(){
		var dat = $('#formActProy').serialize();
		//console.log(dat);
		$.ajax({
			type:"POST",
			url:"../php/actualizacionProyecto.php",
			data: dat,
			success: function(r){
				if(r==1){
					alert("despacho actualizado correctamente");
					//console.log(r);
				}else{
					console.log(r);
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