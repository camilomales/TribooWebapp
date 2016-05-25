<?php 
require_once '../modelos/ubicacionesModelo.php';
function agregarUbicacion($direccion,$latitud, $longitud, $fechaCreacion, $idMensaje){
    $ubicacionesModelo = new ubicacionesModelo();
    $agregarUbicacion = $ubicacionesModelo->agregarUbicacion($direccion, $latitud, $longitud, $fechaCreacion, $idMensaje);
    return $agregarUbicacion;
}