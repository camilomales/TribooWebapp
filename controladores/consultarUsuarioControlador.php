<?php
session_start();
require_once "../modelos/usuariosModelo.php";
function consultar($valemail,$valpsw){
	$usuarioModelo = new usuariosModelo();
	$validar = $usuarioModelo->consultarUsuario($valemail,$valpsw); 
	$login = $usuarioModelo->crearSesion($valemail,$valpsw);

	if($validar['cantidad'] == 1){
		$val=1;		
		$_SESSION['sesion']= $login['idUsuario'];		
	
	}
	else if($validar['cantidad'] == 0)
	{
		$val=0;
	}
	
	return $val;
	
}
?>