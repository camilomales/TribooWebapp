<?php
require_once '../modelos/promocionesModelo.php';
$promocionesModelo = new promocionesModelo();

$verEventos = $promocionesModelo->verEventos();
$contar = count($verEventos);