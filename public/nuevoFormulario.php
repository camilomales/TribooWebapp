<?php
session_start();
require_once "../controladores/verUsuarioControlador.php";
if($_SESSION['sesion']==''){
	header("location:index.php");
}else{
	$datosUsuario=traerInfo($_SESSION['sesion']);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
<title>Triboo - Perfil</title>
<link rel="icon" href="images/favicon.png">
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="assets/ionicons/css/ionicons.css">
<link rel="stylesheet" href="assets/elegant-icons/style.css">
<link rel="stylesheet" href="css/owl.theme.css">
<link rel="stylesheet" href="css/owl.carousel.css">
<link rel="stylesheet" href="css/nivo-lightbox.css">
<link rel="stylesheet" href="css/nivo_themes/default/default.css">
<link rel="stylesheet" href="css/colors/blue.css">
<link rel="stylesheet" href="css/styles.css">
<link rel="stylesheet" href="css/responsive.css">
<script src="js/jquery.min.js"></script>
<script src="js/jquery.validate.js"></script>
<script src="js/cambioDeSecciones.js"></script>
<script src="js/ajaxRegistro.js"></script>
</head>
<body>
<header id="home">
	<div class="color-overlay">
		<div class="navigation-header">
			<div class="navbar non-sticky">
				<div class="container">
					<div class="navbar-header">
						<img src="images/logo@2x.png" alt="">
					</div>
				</div>
			</div>
		</div>
	 	<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 intro-section">
					<h1 class="intro">
					¡Bienvenido a  <strong>Triboo</strong>!
					</h1>
					<?php if($datosUsuario['acerca']!=NULL){?>
						</br></br>
					<?php }else{ ?>
						<p class="sub-heading">
						    Ayudanos completando tu perfil.
		                    <br>
						</p>
					<?php } ?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div class="sf-container">
						<form id="frmRegUsu" name="frmRegUsu" action="prueba.php" method="POST" class="subscription-form form-inline" role="form">
							<input type="hidden" name="rf-idUsuario" id="rf-idUsuario" value="<?php echo $_SESSION['sesion']; ?>">
							<?php
							if($datosUsuario['nombres']==''){
							?>
							<div id="secNombre" name="secNombre">
							<center>
								<label class="form-label">¿Cual es tu nombre? </label><br>
								<input type="text" id="nombre" name="nombre" class="form-control input-box" required><br><br>
								<input type="submit" value="Siguiente" class="btn standard-button"><br><br>
							</form>
							</center>
							</div><!--
							<?php } ?>
							<?php
								if($datosUsuario['apellidos']==''){
							?>
							<div id="secApellido" name="secApellido">
							<center>
								<label class="form-label">Hola <?php echo  $datosUsuario['nombres']?>, por favor danos tu apellido</label><br>
								<input type="text" id="apellidos" name="apellidos" class="form-control input-box" required><br><br>
								<input type="submit" value="Siguiente" class="btn standard-button"><br><br>
							</form>
							</center></div><!--
							<?php } ?>
							<?php
								if($datosUsuario['feNacimiento']=='0000-00-00' || $datosUsuario['feNacimiento']==NULL){
							?>
							<div id="secFecha" name="secFecha">
							<center>
								<label class="form-label">Bienvenido <?php echo  $datosUsuario['nombres']." ". $datosUsuario['apellidos']."<br>"?> Necesitamos tu fecha de nacimiento</label><br>
								<input type="date" id="fecha" name="fecha" class="form-control input-box" required><br><br>
								<input type="submit" value="Siguiente" class="btn standard-button"><br><br>
							</form>
							<a href='index.php'>Continuar mas tarde</a><br><br>
							</center></div><!--
							<?php } ?>
							<?php
								if($datosUsuario['sexo']==NULL){
							?>
							<div id="secGen" name="secGen">
							<center>
								<label class="form-label">¿Cual es tu genero?</label><br>
								<input type="radio" name="sexo" value="0" checked><string class="strGenero">Masculino</string><br>
								<input type="radio" name="sexo" value="1"><string class="strGenero">Femenino</string><br><br>
								<input type="submit" value="Siguiente" class="btn standard-button"><br><br>
							</form>
							<a href='index.php'>Continuar mas tarde</a><br><br>
							</center></div><!--
							<?php } ?>
							<?php
								if($datosUsuario['user']==NULL){
							?>
							<div id="secUser" name="secUser">
							<center>
								<label class="form-label">Un nombre de usuario</label><br>
								<input type="text" name="usuario" id="usuario" class="form-control input-box" required><br><br>
								<input type="submit" value="Siguiente" class="btn standard-button"><br><br>
							</form>
							<a href='index.php'>Continuar mas tarde</a><br><br>
							</center></div><!--
							<?php } ?>
							<?php
								if($datosUsuario['web']==NULL){
							?>
							<div id="secWeb" name="secWeb">
							<center>
								<label class="form-label">Si tienes página web, danos la dirección</label><br>
								<input type="text" name="web" id="web" class="form-control input-box"><br><br>								
								<input type="submit" value="Siguiente" class="btn standard-button"><br><br>
							</form>
							<a href='index.php'>Continuar mas tarde</a><br><br>
							</center></div><!--
							<?php }
							?>
							<?php
								if($datosUsuario['acerca']==NULL){
							?>
							<div id="secAcerca" name="secAcerca">
							<center>
								<label class="form-label">Si gustas puedes contarnos algo acerca de ti</label><br>
								<textarea name="acerca" id="acerca" class="form-control input-box"></textarea><br><br>								
								<input type="submit" value="Terminar" class="btn standard-button"><br><br>
							</form>
							<a href='index.php'>Continuar mas tarde</a><br><br>
							</center></div><!--
							<?php }
							else{  echo 'Has completado todo tu registro ';?>
								<br><a href='intereses.php'>Indica tus intereses</a>
								<br><a href='categorias.php'>Administrar categorias</a>
								<br><a href='promociones.php'>Ver promociones</a>
								<br><a href='home.php'>Ir a Home</a><?php } ?><!---->
						</form>
						<a href='cerrarSession.php'>Salir</a>
					</div>
				</div>
			</div><?php for($i=0; $i<=7; $i++){?> </br> <?php }?>
		</div>
	</div>
</header>
</body>
</html>
<?php }?>

