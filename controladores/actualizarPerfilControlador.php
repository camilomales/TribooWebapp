<?php
require_once "../modelos/usuariosModelo.php";
function actualizarPerfil($idIdUsu, $idNom, $idApe, $idFec, $idSex, $idUsu, $idCon, $idWeb, $idAce){
	$usuarioModelo = new usuariosModelo();
	$capturar = $usuarioModelo->modificarUsuario($idIdUsu, $idNom, $idApe, $idFec, $idSex, $idUsu, $idCon, $idWeb, $idAce); 	
	return $capturar; 
}
?>	