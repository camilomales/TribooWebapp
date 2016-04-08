<?php  
  
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Usuarios</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="icon" href="images/favicon.png">
<link rel="stylesheet" href="css/owl.theme.css">
<link rel="stylesheet" href="css/owl.carousel.css">
<link rel="stylesheet" href="css/nivo-lightbox.css">
<link rel="stylesheet" href="css/nivo_themes/default/default.css">
<link rel="stylesheet" href="css/colors/blue.css">
<link rel="stylesheet" href="css/styles.css">
<link rel="stylesheet" href="css/responsive.css">
<script src="js/jquery.min.js"></script>
<script src="js/jquery.validate.js"></script>
<script src="js/validarFrmUsuario.js"></script>
</head>

<body>

 <h1>¡Bienvenido a Triboo!</h1>
    <h4>Registrate</h4><br>

	<form id="frmAgregar" name="frmAgregar" method="POST" action="agregarUsuario.php">
		<label>Mail</label>
		<input type="mail" id="mail" name="mail" required="">
		<label>Password</label>
		<input type="text" id="pws" name="pws"  required=""><br><br>	
		<input type="submit" value="Guardar">
   	</form>

</body>
</html>