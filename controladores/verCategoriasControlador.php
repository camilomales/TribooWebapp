<?php
 require_once "../modelos/categoriasModelo.php";

 $categoriaModelo = new categoriasModelo();
 $cat = $categoriaModelo->listarCategorias(); 
 
?>