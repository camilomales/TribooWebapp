<?php
require_once "../modelos/promocionesModelo.php";
$mensajeModelo = new promocionesModelo();
$msj = $mensajeModelo->promocionesXInteresYTiempo($_SESSION['sesion']);
$contar = count($msj);
?>