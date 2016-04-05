<?php
///////////////////// cerrar sesion//////////////////////////////
session_start();
$_SESSION["user"]="";
session_destroy();
echo "Secion abandonada<br>";
header("location: index.php");
echo "<a href='index.php'>Volver</a>";
?>
