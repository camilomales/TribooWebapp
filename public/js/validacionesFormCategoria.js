$(document).ready(function(){
    //validaciones para el formulario de agregar nueva categoria
	
        $('#form-categ').bootstrapValidator({
    //      live: 'disabled',
            message: 'This value is not valid',
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {                
                nomCat:{
                    validators: {
                        notEmpty: {
                            message: 'Debes ingresar un nombre de categoría'
                        }
                    }
                },
                palCla:{
                    validators: {
                        notEmpty: {
                            message: 'Ingresa alguna o algunas palabras claves'
                        }
                    }
                },
                posicion:{
                    validators:{
                        notEmpty: {
                            message: 'Digita un posición para tu categoría'
                        },
                        regexp: {
                            regexp: /^[0-9]+$/,
                            message: 'Digite unicamente numeros'
                        }
                    }
                }
            }
      
        });
   
       /*
            $.ajax({
                url: "crearNuevaCategoria.php",
                type: "post",
                data: $("#form-categ").serialize(),        
                beforeSend: function(){
                    $("#divajax").html("cargando");
                },
                success:function (datos){
                  $('#divajax').html(datos);
                }                 
            });
    
     */
    
    //validaciones para el formulario de modificar categoria
  
        $('#form-categ-edit').bootstrapValidator({
    //      live: 'disabled',
            message: 'This value is not valid',
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {                
                nomCatE:{
                    validators: {
                        notEmpty: {
                            message: 'Debes ingresar un nombre de categoría'
                        }
                    }
                },
                palClaE:{
                    validators: {
                        notEmpty: {
                            message: 'Ingresa alguna o algunas palabras claves'
                        }
                    }
                },
                posicionE:{
                    validators:{
                        notEmpty: {
                            message: 'Digita un posición para tu categoría'
                        },
                        regexp: {
                            regexp: /^[0-9]+$/,
                            message: 'Digite unicamente numeros'
                        }
                    }
                }
            }
      
        });



        $('#form-categ-edit1').bootstrapValidator({
    //      live: 'disabled',
            message: 'This value is not valid',
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {                
                numFac:{
                    validators: {
                        notEmpty: {
                            message: 'Debes ingresar un nombre de categoría'
                        }
                    }
                },
                fecFac:{
                    validators: {
                        notEmpty: {
                            message: 'Ingresa alguna o algunas palabras claves'
                        }
                    }
                },
                monFac:{
                    validators:{
                        notEmpty: {
                            message: 'Digita un posición para tu categoría'
                        },
                        regexp: {
                            regexp: /^[0-9]+$/,
                            message: 'Digite unicamente numeros'
                        }
                    }
                }
            }
      
        });

    

    $('#resetBtn').click(function() {
            $('#form-categ').data('bootstrapValidator').resetForm(true);
    });
    $('#resetBtn2').click(function() {

            $('#form-categ-edit').data('bootstrapValidator').resetForm(true);
    });

});	