<?php
session_start();
require_once "../controladores/guardarInteraccionControlador.php";
$fechaInt=date("Y-m-d H:i:s");
if(!empty($_POST['factura'])){
	//echo "Usuario: ".$_SESSION['sesion']."</br>Mensaje: ".$_POST['idmensaje']."</br>Fecha Interacción: ".$fechaInt."</br>Monto: ".$_POST['montovlr']."</br>Factura: ".$_POST['factura'];
	$guardar=guardarInteraccion($_SESSION['sesion'], $_POST['idmensaje'], $fechaInt, $_POST['montovlr'], $_POST['factura'], $_POST['rating']);
	
}
else{
	echo "no se envio datos";
}
?>