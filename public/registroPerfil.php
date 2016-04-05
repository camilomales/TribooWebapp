<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><head>
<body>
<?php
require_once "../controladores/actualizarPerfilControlador.php";
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

?>
</body>
</html>