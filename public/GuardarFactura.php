<?php
require_once "../controladores/GuardarFacturaControlador.php";
require_once "../controladores/verExcelFactura.php";

$idUsuario=$_POST['idUsuario'];
$OnumFac=$_POST["numFac"];
$OfecFac=$_POST["fecFac"];
$OmonFAC=$_POST["monFac"];
//$idUsuario=$_POST["idUsuario"];
//$idUsuario=1;
$i=0;

$entrar=false;
foreach ($cat as $row) {

	if($OnumFac==$row['codValidacion']){
		$entrar=true;
		print '<script language="JavaScript">'; 
		echo 'alert("El # de Factura ya existe");';
		//echo 'function redireccionar(){window.location="http://localhost/tribooweb/public/cargarFactura.php";} ';
		print("location=('cargarFactura.php');"); 
		print '</script>';
		//header('location:cargarFactura.php');


	}
		
}

if($entrar!=true){
$guardar = guardarFactura($OnumFac, $OfecFac, $OmonFAC, $idUsuario);
		header('location:cargarFactura.php');
}

//header('location:cargarFactura.php');



?>