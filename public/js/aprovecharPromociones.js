$(document).ready(function(){
    
	$("#stars-default").rating('create',{
            onClick:function(){ 
                var cal;
                if(this.attr('data-rating')==1)cal='Deficiente'
                if(this.attr('data-rating')==2)cal='Regular'
                if(this.attr('data-rating')==3)cal='Bueno'
                if(this.attr('data-rating')==4)cal='Excelente'
                $('#calificacion').html('Votaste ' + cal);
            }
        });
        $("#stars-default2").rating('create',{
            onClick:function(){ 
                var cal;
                if(this.attr('data-rating')==1)cal='Deficiente'
                if(this.attr('data-rating')==2)cal='Regular'
                if(this.attr('data-rating')==3)cal='Bueno'
                if(this.attr('data-rating')==4)cal='Excelente'
                $('#calificacion2').html('Votaste ' + cal);
            }
        });
         $("#stars-default3").rating('create',{
            onClick:function(){ 
                var cal;
                if(this.attr('data-rating')==1)cal='Deficiente'
                if(this.attr('data-rating')==2)cal='Regular'
                if(this.attr('data-rating')==3)cal='Bueno'
                if(this.attr('data-rating')==4)cal='Excelente'
                $('#calificacion3').html('Votaste ' + cal);
            }
        });
	$(".btn-info").click(function(){
            var id= $(this).data('id');
            var img= $(this).data('img');
            var mon= $(this).data('monto');
            $(".modal-body #img").html("<img  class='img-responsive' src='"+img+"'>" );		
            $(".modal-body #montovlr").val(mon);
            $(".modal-body #monto").val(mon);
            $(".modal-body #idmensaje").val(id);
        }); 
});