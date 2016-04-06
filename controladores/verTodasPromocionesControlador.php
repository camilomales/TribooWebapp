<?php
 require_once "../modelos/promocionesModelo.php";

 $promocionesModelo = new promocionesModelo();
 $promo = $promocionesModelo->verPromociones();
 
?>