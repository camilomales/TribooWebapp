$(document).ready(function() {
      
      $(".cat").click(function(){            
            //var cat = $(this).val();
            var cat = $(this).val();
            var id= $(this).data('usuario');
            var dataString = 'categoria='+cat+'&idUsuario='+id;   
            if($(this).prop('checked')){ //si el campo esta seleccionado
                  $.ajax({
                        url: "interesesAgregar.php",
                        type: "POST",
                        data: dataString,
                        beforeSend: function(){
                              $('#res').fadeIn();
                              $('#res').html("Guardando...");
                              
                        },
                        success: function (datos) {  
                              $('#res').fadeIn();
                              $('#res').html(datos);
                              $('#res').fadeOut(3000);
                        }                    
                  }); 
                 
            }
            else{
             	$.ajax({
                        url: "interesesEliminar.php",
                        type: "POST",
                        data: dataString,
                        beforeSend: function(){
                              $('#res').fadeIn();
                              $('#res').html("Guardando...");
                              
                        },
                        success: function (datos) {  
                              $('#res').fadeIn();
                              $('#res').html(datos);
                              $('#res').fadeOut(3000);
                        }                    
                  }); 
            }
            //alert(cat);
            //admin@tuanfitrion.triboo.co
     }); 

});