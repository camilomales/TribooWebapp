<?php 
require_once "../modelos/usuariosModelo.php";
function guardarUsuario($idmail, $idpws){
	$usuarioModelo = new usuariosModelo();
	//echo $idmail." ".$idpws." en controlador";
	$registrar = $usuarioModelo->insertarUsuario($idmail, $idpws); 	
	return $registrar; 
}
?>