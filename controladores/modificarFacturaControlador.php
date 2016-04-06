<?php
require_once "../modelos/categoriasModelo.php";
function editarFactura($valId, $valorNom, $valorPal, $valPos, $valEst){
	$categoriaModelo = new categoriasModelo();
 	$modCat = $categoriaModelo->modificarFactura($valId, $valorNom, $valorPal, $valEst, $valPos);
	return $modCat;
}

?>