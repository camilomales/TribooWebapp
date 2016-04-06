<?php
require_once "../modelos/tipoMensajeModelo.php";
$tipMensajeModelo = new tipoMensajeModelo();
$tipoMens = $tipMensajeModelo->verTipoMensaje();
