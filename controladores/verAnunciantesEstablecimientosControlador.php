<?php
include_once '../modelos/anunciantesModelo.php';
function verEstablecimiento($idUsuario){
    $anunciantesModelo = new anunciantesModelo();
    $verEstablecimiento = $anunciantesModelo->verAnunciantesPorUsuario($idUsuario);
    return $verEstablecimiento;
}

