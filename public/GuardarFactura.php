<?php
require_once "../controladores/GuardarFacturaControlador.php";

$idUsuario=$_POST['idUsuario'];
$OnumFac=$_POST["numFac"];
$OfecFac=$_POST["fecFac"];
$OmonFAC=$_POST["monFac"];
//$idUsuario=$_POST["idUsuario"];
//$idUsuario=1;

$guardar = guardarFactura($OnumFac, $OfecFac, $OmonFAC, $idUsuario);
		header('location:cargarFactura.php');


?>