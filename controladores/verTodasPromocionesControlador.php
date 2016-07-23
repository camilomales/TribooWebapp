<?php
require_once "../modelos/promocionesModelo.php";

$promocionesModel = new promocionesModelo();
$promo = $promocionesModel->verPromociones();

?>