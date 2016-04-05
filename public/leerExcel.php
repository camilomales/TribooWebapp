<?php

$equipo = array("portero"=>"Cech", "defensa"=>"Terry", "medio"=>"Lampard");
 
foreach($equipo as $posicion=>$jugador)
	{
	echo "El " . $posicion . " es " . $jugador;
	echo "<br>";
	}

?>