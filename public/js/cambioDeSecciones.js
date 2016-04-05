$(document).ready(function(){	
	$("#btnSig1").click(function(){
		secNombre.style.display="none";
    	secApellido.style.display="block";    
    	/*
    	$.ajax({
	        url: "GuardarUsuario.php",
	        type: "post",
	        data: $("#frm").serialize(),
	        beforeSend: function(){
	        	$("#ajax").html("cargando");
	        },
	        success:function (datos){
	          $('#ajax').html(datos);
	        }                  
        }); 	*/
	});
});