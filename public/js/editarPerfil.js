$(document).ready(function(){
    $('#editarPerfil').click(function(){
        $.ajax({
            
            url:   'editarPerfil.php',
            type:  'post',
            beforeSend: function () {
                    $("#ajax-perfil").html("Cargando, espere por favor...");
            },
            success:  function (response) {
                    $("#ajax-perfil").html(response);

            }

        });
    });
    
    $("#formEditarPerfil").validate({
        rules: {
            
            psw: {
                
                minlength: 5,
                maxlength: 25
            },
            password_confirm: {
                
                minlength: 5,
                equalTo: "#psw"
            }
        },
        submitHandler: function(form) {
            $.ajax({
                data:  $("#formEditarPerfil").serialize(),
                url:   '../controladores/editarPerfilControlador.php',
                type:  'post',
                beforeSend: function () {
                    $("#formEditarPerfil").html("Cargando, espere por favor...");
                },
                success:  function (response) {
                    $("#formEditarPerfil").html(response);

                }
            });
        }
    });
    
    
    
});
    
$(function() {
        $("#Date").datepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat: 'yy-mm-dd'
        });
});