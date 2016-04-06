<?php 
require_once "../modelos/usuariosModelo.php";
function actuaNomb($idIdUsu, $idNom){
	$usuarioModelo = new usuariosModelo();
	$registrar = $usuarioModelo->guardarNombre($idIdUsu, $idNom); 	
	return $registrar; 
}
function actuaApe($idIdUsu, $idNom){
	$usuarioModelo = new usuariosModelo();
	$registrar = $usuarioModelo->guardarApellido($idIdUsu, $idNom); 	
	return $registrar; 
}
function actuaFecha($idIdUsu, $idFecha){
	$usuarioModelo = new usuariosModelo();
	$registrar = $usuarioModelo->guardarFecha($idIdUsu, $idFecha); 	
	return $registrar; 
}
function actuaSexo($idIdUsu, $idSexo){
	$usuarioModelo = new usuariosModelo();
	$registrar = $usuarioModelo->guardarSexo($idIdUsu, $idSexo); 	
	return $registrar; 
}
function actuaUsu($idIdUsu, $idUsu){
	$usuarioModelo = new usuariosModelo();
	$registrar = $usuarioModelo->guardarUsuario($idIdUsu, $idUsu); 	
	return $registrar; 
}
function actuaWeb($idIdUsu, $idWeb){
	$usuarioModelo = new usuariosModelo();
	$registrar = $usuarioModelo->guardarWeb($idIdUsu, $idWeb); 	
	return $registrar; 
}
function actuaAce($idIdUsu, $idAce){
	$usuarioModelo = new usuariosModelo();
	$registrar = $usuarioModelo->guardarAcerca($idIdUsu, $idAce); 	
	return $registrar; 
}
?>