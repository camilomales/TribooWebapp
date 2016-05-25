<?php
require_once "../modelos/interaccionesModelo.php";
function guardarInteraccion($vlrUsuario, $vlrMensaje, $vlrFecha, $vlrMonto, $vlrFactura, $vlrCalificacion){
	$interaccionModelo = new interaccionesModelo();
 	$interaccion = $interaccionModelo->agregarInteraccion($vlrUsuario, $vlrMensaje, $vlrFecha, $vlrMonto, $vlrFactura, $vlrCalificacion);
	return $interaccion;
}
?>