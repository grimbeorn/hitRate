$(document).ready(function()
{
	$('#btnAlta').click(function(){
		var datos = $('#fAltaDistribuidor').serialize();
		//console.log("a")
		$.ajax({
			type:"POST",
			url:"../php/altaDistribuidor.php",
			data: datos,
			success: function(r){
				if(r==1){
					alert("este distribuidor ya existe");
				}else if(r==2){
					alert("registrado exitosamente");
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