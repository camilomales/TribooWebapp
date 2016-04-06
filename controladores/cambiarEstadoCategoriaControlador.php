<?php
require_once "../modelos/categoriasModelo.php";
function cambiarEstadoActivo($valorId){
	$categoriaModelo = new categoriasModelo();
 	$cambiar = $categoriaModelo->habilitarCategoria($valorId);
	return $cambiar;
}
function cambiarEstadoInactivo($valorId){
	$categoriaModelo = new categoriasModelo();
 	$cambiar = $categoriaModelo->InhabilitarCategoria($valorId);
	return $cambiar;
}
?>