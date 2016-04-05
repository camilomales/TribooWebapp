<?php  
    
    require_once "../controladores/verCategoriasControlador.php";
    require_once "../controladores/verInteresesControlador.php";
    session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Triboo - Intereses</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="icon" href="images/favicon.png">
<link rel="stylesheet" href="css/owl.theme.css">
<link rel="stylesheet" href="css/owl.carousel.css">
<link rel="stylesheet" href="css/nivo-lightbox.css">
<link rel="stylesheet" href="css/nivo_themes/default/default.css">
<link rel="stylesheet" href="css/colors/blue.css">
<link rel="stylesheet" href="css/styles.css">
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="css/switch-buttons.css" />
<link rel="stylesheet" href="css/app.v1.css" />

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>


</head>
<body>
<div id='contenedorPr' name='contenedorPr'>
    <h1>¡Bienvenido a Triboo!</h1>
    <h4>Danos a conocer tus intereses</h4><br>
    <center>
   
    <form id="form-int" name="form-int" method="POST" action="interesesAgregar.php">
    	<input type="hidden" name="idUsuario" id="idUsuario" value="<?php echo $_SESSION['sesion']; ?>">
	    <?php foreach ($cat as $row): 
        $res = $interesModelo->verificarInteres($_SESSION['sesion'], $row['idCategoria']);        
        if($res['cantidad']==1){?>
            <input type="checkbox" checked data-usuario="<?php echo $_SESSION['sesion']; ?>" id="<?php echo $row['idCategoria']; ?>" class="cat" name="categoria" value="<?php echo $row['idCategoria']; ?>"/><?php echo utf8_encode($row['nombre']); ?><br> 
        <?php } else {?>	    
	    <input type="checkbox" data-usuario="<?php echo $_SESSION['sesion']; ?>" id="<?php echo $row['idCategoria']; ?>" class="cat" name="categoria" value="<?php echo $row['idCategoria']; ?>"/><?php echo utf8_encode($row['nombre']); ?><br> 
		
	 	<?php } endforeach ?>  
	 	
 	</form>
    <div id="res"></div>
</center>
</div>

<script src="js/intereses.js"></script>



</body>
</html>