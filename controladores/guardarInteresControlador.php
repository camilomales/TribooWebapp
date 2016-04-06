<?php
require_once "../modelos/interesesModelo.php";
function guardarInteres($valorIdUsu, $valorIdCat){
	$interesModelo = new interesesModelo();
 	$crearInt = $interesModelo->agregarInteres($valorIdUsu, $valorIdCat);
	return $crearInt;
}
function verificarExistencia($valorIdUsu, $valorIdCat){
	$interesModelo = new interesesModelo();
 	$verInt= $interesModelo->verificarInteres($valorIdUsu,$valorIdCat);
	return $verInt;
}

?>
