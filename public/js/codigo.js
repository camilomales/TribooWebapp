$(document).ready(function() {
	$(".modif").click(function(){
       	var id= $(this).data('id');
		var nom= $(this).data('nombre');
		var pal = $(this).data('palabras');
		var est= $(this).data('estado');
		var pos = $(this).data('posicion');
		$(".modal-body #idCat").val( id );
		$(".modal-body #nomCatE").val( nom );
		$(".modal-body #palClaE").val( pal );
		$(".modal-body #posicionE").val( pos );
		if(est=='1'){
			$(".modal-body #estadoE").prop('checked', true);
		}
		else{			
			$(".modal-body #estadoE").prop("checked", false);
		}
     }); 

	$("#btnini").click(function(){
            if ($("#id-email").val()===""){
                alert("Digite Usuario");
                return;
            }
            
            if ($("#id-password").val()===""){
                alert("Digite Clave");
                return;
            }
            
            $.ajax({
                url:"verificar.php",
                type: "POST",
                data: $("#frm1").serialize(),
                beforeSend: function() {
                    $("#divres").html("Espere...");
                },
                success: function(respuesta) {
                    var i = parseInt(respuesta);
                    if (i===0) {
                        $("#divres").html("Usuario no existe");
                    }
                    else{
                        location = "misMomentos.php";
                    }
                }
            });
   
        });

       

});