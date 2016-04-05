$(document).ready(function(){
	$(".opc").click(function(){		
		$.ajax({
            url: "consultarPromociones.php",
            type: "POST",
            data: $("#form-pro").serialize(),
            beforeSend: function(){
                $('#ajax-pro').html("Cargando...");                  
            },
            success: function (datos) {  
                $('#ajax-pro').html(datos);
            }                    
	     }); 
	});
});