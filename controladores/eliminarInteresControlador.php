<?php
require_once "../modelos/interesesModelo.php";
function eliminarInteres($valorIdUsu, $valorIdCat){
	$interesModelo = new interesesModelo();
 	$elimInt = $interesModelo->eliminarInteres($valorIdUsu, $valorIdCat);
	return $elimInt;
}
?>