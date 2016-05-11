$(document).ready(function(){
   $('#btnRegistrar').click(function(){
       correo = $('#correoReg').val();
       clave = $('#claveReg').val();
        $.ajax({
            data: 'correo='+correo+'&clave='+clave,
            url:   'registrarse.php',
            type:  'post',
            beforeSend: function () {
                    $("#respuestaReg").html("Enviando, espere por favor...");
            },
            success:  function (response) {
                    $("#respuestaReg").html(response);

            }

        });
   }); 
});


