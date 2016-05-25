$(document).ready(function(){
    $('#verIntereses').click(function(){
        $.ajax({
            
            url:   'intereses.php',
            type:  'post',
            beforeSend: function () {
                    $("#ajax-intereses").html("Cargando, espere por favor...");
            },
            success:  function (response) {
                    $("#ajax-intereses").html(response);

            }

        });
    });
    
    
    
    
});

