<?php
require_once "../modelos/usuariosModelo.php";

function actualizarPerfil($idUsuario, $nombres, $apellidos, $feNacimiento, $sexo, $user, $psw, $web, $acerca){
	$usuarioModelo = new usuariosModelo();
	$capturar = $usuarioModelo->modificarUsuario($idUsuario, $nombres, $apellidos, $feNacimiento, $sexo, $user, $psw, $web, $acerca);
	return $capturar; 
}

if($_POST){
    $varForm = array("idUsuario","nombres", "apellidos", "feNacimiento", "sexo", "user");
    foreach ($varForm as $key):
        if(!isset($_POST[$key]) || empty($_POST[$key])){
            $error = 0;
        }
    endforeach;
    
    if(isset($error)){
        echo 'Revise los campos';
    }else{
        extract($_POST, EXTR_PREFIX_SAME, "wddx");
        
        if(isset($_POST['web']))$web = ($_POST['web']);
        if(isset($_POST['acerca']))$acerca = ($_POST['acerca']);
        if(isset($_POST['psw']) && !empty($_POST['psw'])){
            $psw = $_POST['psw'];
            $psw = md5($psw);
            
        }else{
            $psw = $_POST['hpsw'];
           
        }    
        $valor=actualizarPerfil($idUsuario, $nombres, $apellidos, $feNacimiento, $sexo, $user, $psw, $web, $acerca);
        
        if($valor==1){
                echo "<center><font color='green'>Actualización exitosa</font></center>";
        }
        else{
                echo "Error al guardar";
        }
    }
}else{
    echo "error";
}       

 
/*

$datoideU=$_POST['rf-idUsuario'];	
$datoNom=$_POST['rf-nombres'];	
$datoApe=$_POST['rf-apellidos'];	
$datoFecha=$_POST['rf-fechaNa'];	
$datoSexo=$_POST['rf-sexo'];	
$datoUsu=$_POST['rf-usuario'];	
$datoCont=$_POST['rf-contrasena'];	
$datoWeb=$_POST['rf-web'];	
$datoAcer=$_POST['rf-acerca'];	

$valor=actualizarPerfil($datoideU, $datoNom, $datoApe, $datoFecha, $datoSexo, $datoUsu, $datoCont, $datoWeb, $datoAcer);
if($valor==1){
	echo "Registro Guardado <br><a href='./frmUsuario.php'>Volver al formulario</h1>";
}
else{
	echo "Error al guardar";
}
*/
?>
