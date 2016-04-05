<?php
require_once "../controladores/consultarUsuarioControlador.php";
if (isset($_POST['email']) && isset($_POST['psw']) ){
	$email=$_POST['email'];
	$psw=$_POST['psw'];
	//$pwsen=substr(md5($psw), 0, 10);
	//echo $pwsen;
	$vrguardar=consultar($email,substr(md5($psw), 0, 10)); 					
	echo $vrguardar;
	
}
else{
	echo 0;
}
	
?>