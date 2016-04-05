<?php
require_once "../controladores/eliminarInteresControlador.php";
$categoria =$_POST['categoria'];
$idUsuario=$_POST['idUsuario'];
$eliminar = eliminarInteres($idUsuario, $categoria);
echo "Guardado!";
