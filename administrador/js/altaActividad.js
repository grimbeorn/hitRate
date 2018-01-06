$(document).ready(function()
{
	$('#btnGuardar').click(function(){
		var datos = $('#formAltaAct').serialize();
		console.log(datos);
		$.ajax({
			type:"POST",
			url:"../php/altaActividad.php",
			data: datos,
			success: function(r){
				if(r==1){
					alert("esta actividad ya fue registrada");
				}else if(r==2){
					alert("registro exitoso");
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