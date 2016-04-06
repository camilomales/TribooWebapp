<?php
require_once "../modelos/listasModelo.php";
$listasModelo = new listasModelo();
$listas = $listasModelo->verListas();
