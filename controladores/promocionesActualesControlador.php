<?php
require_once '../modelos/promocionesModelo.php';
$promocionesModelo = new promocionesModelo();
$numeroPromos = $promocionesModelo->cantidadPromocionesAct();