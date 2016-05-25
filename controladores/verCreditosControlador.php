<?php
require_once '../modelos/creditosModelo.php';

function verCreditos($idUsuario){
    $creditosModelo = new creditosModelo();
    $listarCreditos = $creditosModelo->listarCreditos($idUsuario);
    if(count($listarCreditos)> 0){
        return $listarCreditos;
    }else{
        return 0;
    }
}


