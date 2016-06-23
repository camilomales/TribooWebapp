<?php
require_once '../modelos/mensajesModelo.php';

function crearAnuncio($fechaCreacion, $descripcion, $palabrasClave, $evento, $valor, $fechaInicio, $fechaFin, $hrPubInicio, $hrPubFin, $linkMasInfo, $sexo, $edad, $cumpleanos, $idTipoMensaje, $idUsuario, $rutaImg, $idLista, $idAnunciante){
    
    $mensajesModelo = new mensajesModelo();

    $agregarMensaje = $mensajesModelo->agregarMensaje($fechaCreacion, $descripcion, $palabrasClave, $evento, $valor, $fechaInicio, $fechaFin, $hrPubInicio, $hrPubFin, $linkMasInfo, $sexo, $edad, $cumpleanos, $idTipoMensaje, $idUsuario, $rutaImg, $idLista, $idAnunciante);
    return $agregarMensaje;
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

