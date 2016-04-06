<?php
require_once "../modelos/promocionesModelo.php";
$mensajeModelo = new promocionesModelo();
$msj3 = $mensajeModelo->promocionesXTiempo($_SESSION['sesion']);
$contar = count($msj3);
?>