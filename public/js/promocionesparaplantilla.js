$(document).ready(function(){
	
		$.ajax({
            url: "consultarPromociones.php",
            type: "POST",
            data: $("#form-pro").serialize(),
            beforeSend: function(){
                $('#ajax-promo').html("Cargando...");                  
            },
            success: function (datos) {  
                $('#ajax-promo').html(datos);
            }                    
	     }); 
	
});