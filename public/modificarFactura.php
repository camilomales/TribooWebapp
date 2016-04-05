<?php
//require_once "../controladores/modificarFacturaControlador.php";
include ("conecta.php");//incluya a la clase conecta.php o crea la coneccion
      $bd =  conectar();


$idCat=$_POST["idCat"];
$numeF=utf8_decode($_POST["nomCatE"]);
$fechF=utf8_decode($_POST["palClaE"]);
$montF=utf8_decode($_POST["estadoE"]);
$id=1;

$cadena = "update validaciones set codValidacion='$numeF' , fechaVenta='$fechF' ,  montoVenta='$montF' ,
    idUsuario='1'  
    where idValidacion = '$idCat'";// se crea ña sentencia update 

//echo $cadena;

            //conecta a la base de datos empresass q esta en conecta.php
            if(!$bd) return;// si la base de datos no existe , entonces retorna
            $res = mysql_query($cadena,$bd);//ejecuta la sentencia en la base de datos
            if(!$res)
                echo
                "<h3>error !!!!!!</h3>".  mysql_error();// si no hay respuesta en la cadena o la bd se imrime el error sql
            else                
                echo 
            "<h3>Informacion</h3>Registro Modificado!<br>";
            mysql_close();// cierra bd
            header('Location: cargarFactura.php');


	//$guardar=editarFactura($idCat, $numeF, $fechF, $montF, $id);
	//header('Location: cargarFactura.php');


	
?>