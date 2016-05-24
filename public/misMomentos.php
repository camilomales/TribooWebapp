<?php
session_start();
if(isset($_SESSION['sesion'])){
require_once"../controladores/verPromoXTiempoControlador.php";
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
    
    <title>Mis momentos - Triboo</title>
    <?php include './pages/scripts-styles-principal.php';?>
	
  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">
      <!--Header-->
      <header class="header">
          <?php include './pages/header.php';?>
      </header>
      <!--Menu-->
      <?php include './pages/menu.php';?>
      <!--main content start-->
      <section id="main-content">
        <section class="wrapper">
             
            <div class="row">
                

                <?php
                //$hoy = date("Y-m-d H:i:s");
                //echo $hoy;
            
                  foreach ($msj3 as $row): ?>
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <div class"cols-xs col-sm-3 col-md-6 col-lg-6">
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
                        </div>
                  </div><?php
                  endforeach;
                  if($contar==0) echo "No hay promociones vigentes";
                  for($i=0; $i<22; $i++){echo"<br>";}?>
            </div>        
        </section>
      </section>
      <!--main content end-->
      
      <!-- Footer -->
      <?php include './pages/footer.php';?>      
  </section>
  <!-- container section start -->
<!-- Modal crear anuncio -->
  <?php include './pages/anuncioModal.php';?>

    </body>
</html>
<?php
}else{
    header("location:index.php");
}
?>
