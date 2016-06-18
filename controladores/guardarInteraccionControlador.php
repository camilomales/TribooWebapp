<?php
require_once "../modelos/interaccionesModelo.php";
function guardarInteraccion($vlrUsuario, $vlrMensaje, $vlrFecha, $vlrMonto, $vlrFactura, $vlrCalificacion, $vlrCalificacion2, $vlrCalificacion3, $observacion){
	$interaccionModelo = new interaccionesModelo();
 	$interaccion = $interaccionModelo->agregarInteraccion($vlrUsuario, $vlrMensaje, $vlrFecha, $vlrMonto, $vlrFactura, $vlrCalificacion, $vlrCalificacion2, $vlrCalificacion3,$observacion);
	return $interaccion;
}
?>