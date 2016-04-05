<html>
<head>
</head>
<body>
<?php
header("Content-type: text/html; charset=utf8");
require_once "../controladores/guardarCategoriaControlador.php";

$nomCat=utf8_decode($_POST["nomCat"]);
$palCla=utf8_decode($_POST["palCla"]);
$posicion=$_POST["posicion"];
if(isset($_POST["estado"])){
	$estado=$_POST["estado"];
}
else{
	$estado=0;
}
if(!empty($nomCat)&&!empty($palCla)&&!empty($posicion)){
	$guardar=guardarCategoria($nomCat, $palCla, $posicion, $estado);
	echo "registro guardado";
	header('Location: categorias.php');
}
else{
	echo "Se produjo un error";?>
	<br><br><a href="categorias.php">Volver</a>
<?php } ?>

</body>
</html>
