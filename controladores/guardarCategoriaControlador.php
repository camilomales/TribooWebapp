<?php
require_once "../modelos/categoriasModelo.php";
function guardarcategoria($valorNom, $valorPal, $valPos, $valEst){
	$categoriaModelo = new categoriasModelo();
 	$crearCat = $categoriaModelo->agregarCategoria($valorNom, $valorPal, $valEst, $valPos);
	return $crearCat;
}

?>