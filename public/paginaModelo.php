<?php
session_start();
if(isset($_SESSION['sesion'])){

require_once"../controladores/verTipoMensajeControlador.php";
require_once"../controladores/verListasControlador.php";
require_once '../controladores/verAnunciantesEstablecimientosControlador.php';
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
    
    <title>Página Modelo</title>
    <?php include './pages/scripts-styles-principal.php';?>
  </head>

  <body>
  <!-- container section start -->
    <section id="container" class="">

        <header class="header">
              <?php include './pages/header.php';?>
        </header>
        <!--Menu-->
        <?php include './pages/menu.php';?>
        <section id="main-content">
          <section class="wrapper">          
              <script>
              cargarMapa();
              </script>
              <div id='mapa'></div>
              <?php for($i=0; $i<22; $i++){echo"<br>";}?>
          </section>
        </section>
        <!--main content end-->
        <!-- Footer -->
        <?php include './pages/footer.php';?>         
    </section>
    <?php include './pages/anuncioModal.php';?>
  </body>
</html>
<?php
}else{
    header("location:index.php");
}
?>
