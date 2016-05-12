$(document).ready(function(){
   $("#formRegistro").validate({
       rules: {
            contrasena: {
                required: true,
                minlength: 5
            },
            password_confirm: {
                required: true,
                minlength: 5,
                equalTo: "#claveReg"
            }
       },
       submitHandler: function(form) {
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
       }
   });
   
});


