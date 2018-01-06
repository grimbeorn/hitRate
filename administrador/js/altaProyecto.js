// document.getElementById("btnDespachoNuevo").addEventListener("click",function despachoNuevo()
// {
// 	location.href="../html/altaDespacho.html";
// });

$(document).ready(function()
{
	$('#btnGuardar').click(function(){
		var datos = $('#formAltaProyecto').serialize();
		console.log(datos)
		$.ajax({
			type:"POST",
			url:"../php/altaProyecto.php",
			data: datos,
			success: function(r){
				if(r==1){
					alert("este proyecto ya existe");
				}else if(r==2){
					alert("proyecto registrado exitosamente");
				}else{
					alert("hubo un error");
				}
				console.log(r)
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