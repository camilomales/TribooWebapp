<?php
require_once "../controladores/guardarUsuarioControlador.php";
if($_POST['mail'] && $_POST{'pws'}){
	$mail = $_POST['mail'];
	$pws = $_POST['pws'];
	$agregar = guardarUsuario($mail, md5($pws));
}
else{
	echo "no se enviaron datos";
}

?>