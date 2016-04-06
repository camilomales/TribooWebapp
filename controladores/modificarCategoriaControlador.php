<?php
require_once "../modelos/categoriasModelo.php";
function editarcategoria($valId, $valorNom, $valorPal, $valPos, $valEst){
	$categoriaModelo = new categoriasModelo();
 	$modCat = $categoriaModelo->modificarCategoria($valId, $valorNom, $valorPal, $valEst, $valPos);
	return $modCat;
}

?>