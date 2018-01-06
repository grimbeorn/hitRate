$(document).ready(function()
{
	$('#btnGuardar').click(function(){
		var datos = $('#formUsuario').serialize();
		//console.log("a")
		$.ajax({
			type:"POST",
			url:"../php/altaUsuario.php",
			data: datos,
			success: function(r){
				if(r==1){
					alert("este usuario ya existe");
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
