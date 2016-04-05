<?php
// Note: filter_var() requires PHP >= 5.2.0
require_once "../controladores/addUsuariosQRControlador.php";
require_once "../controladores/sendMail.php";

if (isset($_POST['promo']) && isset($_POST['email']) ){
	$email=$_POST['email'];
	$id_promo=$_POST['promo'];
	$vrguardar=guardar($id_promo,$email); //guarda si el codigo existe y el usuario no esta registrado					
	$pos= strripos ( $email , '@' );
	$nombre=substr($email,0,$pos);
	if ($vrguardar==1){ 	
	    sendmail($email);		
	}
	echo $vrguardar;
}
?>