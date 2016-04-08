<?php
 require_once "../modelos/facturaModelo.php";

 $facturaModelo = new facturaModelo();
 $cat = $facturaModelo->listarCodExcel(); 
 //$dog = $categoriaModelo->valNull(); 
 
?>