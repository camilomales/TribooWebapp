<?php  
 require_once "../modelos/usuariosQRModelo.php";
 
 function guardar($valorQR,$valorCorreo)
 {
 $usuarioModel = new usuariosQRModelo();
 $validarUsu = $usuarioModel->buscarQR($valorQR);
 $validarPromo = $usuarioModel->buscarPromocionQR($valorQR);
 
 if ($validarUsu['cantidad']==0 and $validarPromo['cantidad']==1){
	 $usuarioModel->guardarUsuarioQR($valorQR,$valorCorreo);
	 $valor=1;	
	}else{ $valor=0;
	}	 		 				
  return $valor;	
 }
 
?>