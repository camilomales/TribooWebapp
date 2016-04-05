$(document).ready(function(){
	$("#usuario").change(function(){
       $.ajax({
	        url: "prueba.php",
	        type: "post",
	        data: $("#frmRegUsu").serialize(),        
	                        
        }); 	
     }); 
	$("#web").change(function(){
       $.ajax({
	        url: "prueba.php",
	        type: "post",
	        data: $("#frmRegUsu").serialize(),        
	                        
        }); 	
     }); 
	$("#acerca").change(function(){
       $.ajax({
	        url: "prueba.php",
	        type: "post",
	        data: $("#frmRegUsu").serialize(),        
	                        
        }); 	
     }); 
});	