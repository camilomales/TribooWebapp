<?php
require_once "../controladores/modificarCategoriaControlador.php";

$idCat=$_POST["idCat"];
//$datoId=$_GET["id"];
$nomCat=utf8_decode($_POST["nomCatE"]);
$palCla=utf8_decode($_POST["palClaE"]);
$posicion=$_POST["posicionE"];
if(isset($_POST["estadoE"])){
	$estado=$_POST["estadoE"];
}
else{
	$estado=0;
}

if(!empty($nomCat)&&!empty($palCla)){
	$guardar=editarCategoria($idCat, $nomCat, $palCla, $posicion, $estado);
	header('Location: categorias.php');
}
else{
	echo "Se produjo un error";?>
	<br><br><a href="categorias.php">Volver</a>
<?php } ?>