<?php 
require_once "../modelos/usuariosQRModelo.php";

 function buscaridpromo($idpromo)
 {
 $usuarioModel = new usuariosQRModelo(); 
 $validarPromo = $usuarioModel->buscarPromocionQR($idpromo);
 
 if ($validarPromo['cantidad']==1){
 	 $verPromocion = $usuarioModel->buscarIdPromocionesQR($idpromo);	 	 
 	 $imagen = $verPromocion['imagen'];
	}else{ $imagen="0";
	}	 		 				
  return $imagen;	
 }


$idpromo="";
$promo="Registra tu c&oacute;digo de invitación.";

	if(isset($_GET['id_promo'])){		

		$imagen=buscaridpromo($_GET['id_promo']);
		if ($imagen!="0"){
			$idpromo=$_GET['id_promo'];			
			$promo='¡Qu&eacute; bien!, has aprovechado la promoci&oacute;n de <img src="images/logos/'.$imagen.'.png">';		
		}	
	}
?>
