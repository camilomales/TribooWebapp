<?php  
 require_once "../modelos/usuariosQRModelo.php";

 $usuarioModel = new usuariosQRModelo();
 $a_users = $usuarioModel->verUsuariosQR(); 
 
?>