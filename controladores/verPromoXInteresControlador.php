<?php
require_once "../modelos/promocionesModelo.php";
$mensajeModelo = new promocionesModelo();
$msj2 = $mensajeModelo->promocionesXInteres($_SESSION['sesion']);
$contar = count($msj2);
?>