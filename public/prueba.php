<?php
require_once "../controladores/actualizarUsuarioControlador.php";
$valIde=$_POST['rf-idUsuario'];
if(isset($_POST['nombre'])){
	$valNom=$_POST['nombre'];
	$guardar=actuaNomb($valIde, $valNom);
	header("location:completarPerfil.php");
}
if(isset($_POST['apellidos'])){
	$valApe=$_POST['apellidos'];
	$guardar=actuaApe($valIde, $valApe);
	header("location:completarPerfil.php");
} 
if(isset($_POST['fecha'])){
	$valFecha=$_POST['fecha'];
	$guardar=actuaFecha($valIde, $valFecha);
	header("location:completarPerfil.php");
}
if(isset($_POST['sexo'])){
	$valSexo=$_POST['sexo'];
	$guardar=actuaSexo($valIde, $valSexo);
	header("location:completarPerfil.php");
}
if(isset($_POST['usuario'])){
	$valUsu=$_POST['usuario'];
	$guardar=actuaUsu($valIde, $valUsu);
	header("location:completarPerfil.php");
}
if(isset($_POST['web'])){
	if($_POST['web']==''){
		$valWeb='No';
		$guardar=actuaWeb($valIde, $valWeb);
		header("location:completarPerfil.php");
	}
	else{
		$valWeb=$_POST['web'];
		$guardar=actuaWeb($valIde, $valWeb);
		header("location:completarPerfil.php");
	}
}	
if(isset($_POST['acerca'])){
	if($_POST['acerca']==''){
		$valAce='No';
		$guardar=actuaAce($valIde, $valAce);
		header("location:completarPerfil.php");
	}
	else{
		$valAce=$_POST['acerca'];
		$guardar=actuaAce($valIde, $valAce);
		header("location:completarPerfil.php");
	}
}
?>