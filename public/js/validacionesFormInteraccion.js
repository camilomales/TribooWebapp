$(document).ready(function(){
    //validaciones para el formulario de agregar nueva categoria

    
    $('#form-inter').validate({
        rules: {
            factura: {
                required: true,
                minlength: 2
            }
        },
        messages: {
            factura: {
                required: "Por favor ingresa el numero de factura ",
                
            }
        },
        submitHandler: function(form) {
            $.ajax({
                url: "guardarInteraccion.php",
                type: "POST",
                data: $(form).serialize(),           
                success: function (datos) {   
                    $('#modal-aprov-prom').modal('hide');
                    $('#factura').html('');
                    alert('datos guardados');

                }
             }); 
        }
    });


	/*
        $('#form-inter').bootstrapValidator({
    //      live: 'disabled',
            message: 'This value is not valid',
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {                
                factura:{
                    validators: {
                        notEmpty: {
                            message: 'Debes ingresar el numero de factura'
                        }
                    }
                }
            }
      
        }); 

    $("#btnCrearCat").click(function(){   
        if($("#form-inter").valid()){  
            $.ajax({
                url: "guardarInteraccion.php",
                type: "POST",
                data: $("#form-inter").serialize(),           
                success: function (datos) {   
                    $('#modal-aprov-prom').modal('hide');
                    alert('datos guardados');
                }
             }); 
        }    
     
    });
*/

    

});	