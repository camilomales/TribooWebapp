<?php 
require_once "../modelos/usuariosModelo.php";
function guardarUsuario($idmail, $idpws){
    $usuarioModelo = new usuariosModelo();
    $registrar = $usuarioModelo->registrarUsuario($idmail, $idpws); 	
    return $registrar; 
}
function comprobarEmail($idmail){
    $usuarioModelo = new usuariosModelo();
    $comprobar = $usuarioModelo->comprobarEmail($idmail); 
    return $comprobar;
}
?>