<?php  
    

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Triboo - Perfil</title>
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
<div id='contenedorPr' name='contenedorPr'>
    <h1>¡Bienvenido a Triboo!</h1>
    <h4>Por favor completa tu perfil y cambia tu contrase&ntilde;a</h4><br>
    <div id="contenedorfrm" name="contenedorfrm">
    <!-- FORMULARIO PERFIL -->
        <form id="frmPerfil" name="frmPerfil" method="POST" action="registroPerfil.php" >
            <input type="hidden" name="rf-idUsuario" id="rf-idUsuario" value="<?php echo $_SESSION['sesion']; ?>">
            <center>
            <table>
            <tr>
                <td><label>Nombres: </label></td>
            </tr>
            <tr>
                <td><input type="txt" name="rf-nombres" id="rf-nombres"  placeholder="Nombres" class="required"></td>
            </tr>
            <tr>
                <td><label>Apellidos: </label></td>
            </tr>
            <tr>
                <td><input type="txt" name="rf-apellidos" id="rf-apellidos"  placeholder="Apellidos" class="required"></td>
            </tr>   
            <tr> 
                <td><label>Fecha de Nacimiento: </label></td>
            </tr>
            <tr>
                <td><input type="date" id="rf-fechaNa" name="rf-fechaNa" class="required"></td>
            </tr>
            <tr> 
                <td><label>Genero: </label></td>
            </tr>
            <tr>
                <td><select id="rf-sexo" name="rf-sexo" class="campos">
                    <option value='0'>Masculino</option>
                    <option value='1'>Femenino</option>
                </select></td>
            </tr>
            <tr>
                <td><label>Usuario: </label></td>
            </tr>
            <tr>
                <td><input type="txt" name="rf-usuario" id="rf-usuario"  placeholder="Nombre de usuario" class="required"></td>
            </tr>
            <tr>
                <td><label>Contraseña: </label></td>
            </tr>
            <tr>
                <td><input type="password" name="rf-contrasena" id="rf-contrasena" placeholder="Contraseña Nueva" class="required" minlength="5" ></td>
            </tr> 
            <tr>
                <td><label>Dirección de tu página web: </label></td>
            </tr>
            <tr>
                <td><input type="text" name="rf-web" id="rf-web"  placeholder="Pagina Web" class="campos" ></td>
            </tr>
            <tr>
                <td><label>Acerca: </label></td>
            </tr>
            <tr>
                <td><textarea name="rf-acerca" id="rf-acerca"  placeholder="Acerca" class="campos" class="required" minlength="5"></textarea></td>
            </tr>
            <tr>
                <tr><td>&nbsp</td></tr>
                <td><input type="button" value="Completar Perfil" name="btnenviar" id="btnenviar"></td>
            </tr>    
            </table></center>  
        </form>
    </div>
    <div id="divdatos" name="divdatos"></div>
    <a href='cerrarSession.php'>Salir</a>

</div>
</body>
</html>
<?php 
 
?>