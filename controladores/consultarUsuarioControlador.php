<?php
session_start();
require_once "../modelos/usuariosModelo.php";
function consultar($valemail,$valpsw){
	$usuarioModelo = new usuariosModelo();
	$validar = $usuarioModelo->consultarUsuario($valemail,$valpsw); 
	$login = $usuarioModelo->crearSesion($valemail,$valpsw);
        //
        if($validar['cantidad'] == 1){
            $val=1;		
            $_SESSION['sesion']= $login['idUsuario'];
            $datosUsuario = $usuarioModelo->verDatosUsuario($login['idUsuario']);
            if($datosUsuario['nombres']!='' || $datosUsuario['nombres']!=''){
                return $val;
            }else{
                return $val = 2;
            }

        }else if($validar['cantidad'] == 0){
            $val=0;
        }
        return $val;
        
	
	//return $val;
	
}
?>