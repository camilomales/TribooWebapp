<?php
require_once "../modelos/facturaModelo.php";
function editarFactura($IdVal, $numFac, $fecFac, $monFac, $idusu){
	$facturaModelo = new facturaModelo();
 	$modCat = $facturaModelo->modificarFactura($IdVal, $numFac, $fecFac, $monFac, $idusu);
	return $modCat;
}

?>