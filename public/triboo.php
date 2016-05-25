<?php
session_start();
if(isset($_SESSION['sesion'])){
require_once '../controladores/verTodasPromocionesControlador.php';
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
    
    <title>Todas las promociones Triboo</title>
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
              <div class="row"><?php
                foreach ($promo as $row): ?>
                <div class="col-md-4">                
                      <img class="img-responsive" src="<?php echo $row['rutaImg'];?>">
                      <br/><?php
                      echo utf8_encode($row['descripcionMsj']);?><br/><?php
                      echo utf8_encode($row['descripcionTipo']);?><br/><?php
                      echo utf8_encode($row['direccion']);?><br/>
                      <button class="btn-info" data-toggle="modal" data-target="#modal-aprov-prom"
                      data-id="<?php echo $row['idMensaje'];?>"
                      data-img="<?php echo $row['rutaImg'];?>"
                      data-idmen="<?php echo $row['idMensaje'];?>"
                      data-idusu="<?php echo $_SESSION['sesion'];?>"
                      data-monto="<?php echo $row['valor'];?>">Aprovechar Promoción</button><hr>             
                </div><?php
                endforeach;?>
              </div>              
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
