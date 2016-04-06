<?php
require_once "../modelos/facturaModelo.php";

function guardarFactura($numFac, $fecFac, $monFac, $idUsuario){
	$facModelo = new facturaModelo();
 	$crearFac = $facModelo->agregarFactura($numFac, $fecFac, $monFac, $idUsuario);
	return $crearFac;
}


?>