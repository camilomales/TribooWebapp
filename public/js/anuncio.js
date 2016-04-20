var hoy = new Date()
hoy = formatoFecha(hoy);

function formatoFecha(date){        
    var dd = date.getDate();
    var mm = date.getMonth()+1; //hoy es 0!
    var yyyy = date.getFullYear();
    if(dd<10) {
        dd='0'+dd
    } 
    if(mm<10) {
        mm='0'+mm
    } 
    date = yyyy+'-'+mm+'-'+dd;
    return date;
}

$(function() {
    $('input[name="daterange"]').daterangepicker({
        timePicker: true,
        
        locale: {
            format: 'YYYY-MM-DD | H:mm ',
            separator: " Hasta  ",
            daysOfWeek: [
                "Do",
                "Lu",
                "Ma",
                "Mi",
                "Ju",
                "Vi",
                "Sa"
            ],
            monthNames: [
                "Enero",
                "Febrero",
                "Marzo",
                "Abril",
                "Mayo",
                "Junio",
                "Julio",
                "Agosto",
                "Septiembre",
                "Octubre",
                "Noviembre",
                "Diciembre"
            ],
            applyLabel: "Aceptar",
            cancelLabel: "Cancelar",
            
        },
         minDate: hoy
        
    });
}); 
function ajaxmapa(){
    $.ajax({
            
            url:   'mapa.php',
            type:  'post',
            beforeSend: function () {
                    $("#ajax").html("Enviando, espere por favor...");
            },
            success:  function (response) {
                    $("#ajax").html(response);

            }

    });
}
   

function formatoValor(input){
    var num = input.value.replace(/\./g,'');
    if(!isNaN(num)){
        num = num.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g,'$1.');
        num = num.split('').reverse().join('').replace(/^[\.]/,'');
        input.value = num;
    }

    else{ 
        input.value = input.value.replace(/[^\d\.]*/g,'');
    }
}
$(document).ready(function(){
    $("#btnForm").hide();
    $("#anuncioParte2").hide();
    $("#ajax").hide();
    $("#btnGuardar").hide();
    $("#btnUbicacion").hide();
    $("#btnInfoExtra").click(function(){
        $("#anuncioParte1").hide();
        $("#btnInfoExtra").hide();
        $("#btnForm").show();
        $("#anuncioParte2").show();
        $("#ajax").hide();
        $("#btnGuardar").hide();
        $("#btnUbicacion").hide();
        obs = $(this);
        idButton = obs.data("but");
        
    });
    $("#btnForm").click(function(){
        $("#form-crear-anun").validate();
        $("#anuncioParte1").show();
        $("#btnForm").hide();
        $("#btnInfoExtra").show();
        $("#anuncioParte2").hide();
        $("#ajax").hide();
        $("#btnContinuar").show();
        $("#btnGuardar").hide();
        $("#btnUbicacion").hide();
    });
    $("#form-crear-anun").validate({
         submitHandler: function(form) {
            $("#btnCanc").hide();
            $("#anuncioParte1").hide();
            $("#ajax").show();
            $("#anuncioParte2").hide();
            cargarmapa();
            $("#btnForm").hide();
            $("#btnContinuar").hide();
            $("#btnInfoExtra").hide();
            $("#btnGuardar").show();
            $("#btnUbicacion").show();
        
            var formulario = $('#form-crear-anun');			
            var datos = formulario.serialize();
            var archivos = new FormData();	
            var url = 'crearAnuncio.php';			
            for (var i = 0; i < (formulario.find('input[type=file]').length); i++) { 
                archivos.append((formulario.find('input[type="file"]:eq('+i+')').attr("name")),((formulario.find('input[type="file"]:eq('+i+')')[0]).files[0]));
            }				
            $.ajax({
                url: url+'?'+datos,
                type: 'POST',
                contentType: false, 
                data: archivos,
                processData:false,
                beforeSend: function () {                
                        $("#div-respuesta").html("Enviando, espere por favor...");                    
                },
                success:  function (data) {
                        $("#div-respuesta").html(data);
                }
            });
            ajaxmapa();
         }
     });
    
    $("#btnUbicacion").click(function(){
        tipo = 2;
        ajaxUbicacion(tipo);
        ajaxmapa();
    });
    
   function ajaxUbicacion(tipo){
        cx = $("#cx").val();
        cy = $("#cy").val();
        direccion = $("#direccion").val();
        idMensaje = $("#idMensaje").val();
        if(tipo == 1){
            data = 'cx='+cx+'&cy='+cy+'&direccion='+direccion+'&idMensaje='+idMensaje;
        }
        if(tipo == 2){
            data = 'cx='+cx+'&cy='+cy+'&direccion='+direccion+'&idMensaje='+idMensaje+'&tipo='+tipo;
        }            
        $.ajax({
            data:  data,
            url:   'agregarUbicacion.php',
            type:  'post',

            success:  function (response) {
                    $("#div-agr-ubi").html(response);

            }
        });
        
    }
    
    $("#btnGuardar").click(function(){
        tipo = 1;
        ajaxUbicacion(tipo);
        
    });
    $("#btn-anuncio").click(function(){
        
        ajaxmapa();
        
    });
     
});	