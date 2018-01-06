$(document).ready(function()
{
	$('#btnGuardar').click(function(){
		var datos = $('#formDespacho').serialize();
		
		$.ajax({
			type:"POST",
			url:"../php/altaDespacho.php",
			data: datos,
			success: function(r){
				if(r==1){
					alert("este despacho ya existe");
				}else if(r==2){
					alert("despacho registrado exitosamente");
					
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