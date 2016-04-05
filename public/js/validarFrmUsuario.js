$(document).ready(function(){	
	$("#btnenviar").click(function(){
		if($("#frmPerfil").valid()){
			
			$.ajax({
				url: "registroPerfil.php",
		        type: "post",
		        data: $("#frmPerfil").serialize(),
		        beforeSend: function(){
		        	$("#contenerdofrm").html("Guardando...");
		        },
		        success:function (datos){
		          $('#contenedorfrm').html(datos);
		        }	
			});
		}
	});
});