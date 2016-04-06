<?php  
 require_once "../modelos/usuariosModelo.php";

function traerInfo($id){
	 $usuarioModelo = new usuariosModelo();
	 $infoUsu = $usuarioModelo->llevarDatos($id); 
	 return $infoUsu;
} 
?>