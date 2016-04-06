<?php
require_once "../modelos/mensajesModelo.php";
function verMensajes(){
	$mensajeModelo = new mensajesModelo();
	if($_SERVER['REQUEST_METHOD']=='GET'){
		$msj = $mensajeModelo->listarMensajesActivos();
		if ($msj) {
			foreach ($msj as $row): 
				$output[]=array_map('utf8_encode', $row);
			endforeach;
		    $datos["estado"] = 1;
		    $datos["mensajes"] = $output;
			$json= json_encode($datos);
			return $json;

		}else {
	        $json=json_encode(array(
	            "estado" => 2,
	            "mensaje" => "Ha ocurrido un error"
	        ));
	        return $json;
		}
	}	
}
?>