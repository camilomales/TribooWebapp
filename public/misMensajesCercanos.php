<?php
session_start();
if(isset($_SESSION['sesion'])){
//require_once '../controladores/verPromocionesCercanasControlador.php';
$idUsuario = $_SESSION['sesion'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <title>Promociones cercanas Triboo</title>
    <?php include './pages/scripts-styles-principal.php';?>
    <script src="js/mensajesCercanos.js">
	
    </script>
  </head>

  <body onload="localize()">
  <!-- container section start -->
  <section id="container" class="">
      <header class="header">
            <?php include './pages/header.php';?>
      </header>

      <!--Menu-->
      <?php include './pages/menu.php';?>
      
      <!--main content start-->
      <section id="main-content">
         
        <section class="wrapper">                
            <div class="row">
                <div id="msjCercanos">Obteniendo coordenadas geograficas...</div>
            
            </div>
        </section>
      </section>
      <!--main content end-->
      <!-- Footer -->
      <?php include './pages/footer.php';?>   >      
  </section>
  <!-- container section start -->
<?php include './pages/anuncioModal.php';?>
  </body>
</html>
<?php
}else{
    header("location:index.php");
}
?>
