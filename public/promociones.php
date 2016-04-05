<?php     
    session_start();    
    if($_SESSION['sesion']==''){
        header("location:index.php");
    }
    else{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Triboo - promociones</title>
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

<script src="js/promociones.js"></script>

</head>
<body>
<div id='contenedorPr' name='contenedorPr'>
    <h1>¡Bienvenido a Triboo!</h1><br/>
    <form id="form-pro" name="form-pro" method="POST">
        <input type="checkbox" name="opc1" class="opc" value="Intereses"/>Intereses &nbsp &nbsp
        <input type="checkbox" name="opc2" class="opc" value="Tiempo"/>Tiempo
    </form>

    <div id="ajax-pro">Elige una opción</div>    

</div>
</body>
</html>
<?php } ?>