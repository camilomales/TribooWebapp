<?php
require_once "../controladores/guardarInteresControlador.php";
$categoria =$_POST['categoria'];
$idUsuario=$_POST['idUsuario'];
$consulta = verificarExistencia($idUsuario, $categoria);
if($consulta['cantidad']==0){
	$guardar = guardarInteres($idUsuario, $categoria);
	echo "Guardado!";
}
else{
	echo "La categoría ya se guardo anteriormente";
}

/*
$idUsuario=$_POST['idUsuario'];
if(isset($_POST['categoria'])){
	$categoria =$_POST['categoria'];
	$cantidad = count($categoria);
	$reg = verIntereses($idUsuario);

//	$contar = count($reg);
	
	//$guardar = guardarInteres($idUsuario, $categoria[0]);
	//echo "Guardado";
	//for ($i = 0; $i<$cantidad; $i++){
	//	$cat=50;
		//if($categoria[$i]!=$cat){
			echo "guardado ".$categoria;
		//}
		//echo "guardado ".$categoria[$i];
		//echo $categoria[$i]." ";
    //}


	/*
	foreach ($reg as $row):
		
		for ($i = 0; $i<$cantidad; $i++){
			if($row['idCategoria']!=$categoria[$i]){
				echo "insertar";
				
			}
			else{
				echo "modificar";
			}
			//echo $row['idCategoria']." con ".$categoria[$i];
	        //$guardar = guardarInteres($idUsuario, $categoria[$i]);
	    }
	endforeach;	
	
	/*
	for ($i = 0; $i<$cantidad; $i++){
		$reg = 
        $guardar = guardarInteres($idUsuario, $categoria[$i]);
    }*/
//}



?>