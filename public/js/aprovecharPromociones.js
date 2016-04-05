$(document).ready(function(){
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