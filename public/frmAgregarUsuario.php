<?php  
  
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Usuarios</title>
</head>
<body>
	<form id="frmAgregar" name="frmAgregar" method="POST" action="agregarUsuario.php">
		<label>mail</label>
		<input type="mail" id="mail" name="mail">
		<label>password</label>
		<input type="text" id="pws" name="pws">	
		<input type="submit" value="Guardar">
   	</form>
</body>
</html>