<?php
require_once "../controladores/cambiarEstadoCategoriaControlador.php";
if(isset($_GET["id"]) && isset($_GET["estado"])){
	$datoId=$_GET["id"];
	$datoEstado=$_GET["estado"];
	if($datoEstado==0){
		$cambiar=cambiarEstadoActivo($datoId);	
	}
	else{
		$cambiar=cambiarEstadoInactivo($datoId);		
	}
	header('Location: categorias.php');
	
}
else{
	echo "error de envio de datos";
}
?>