<?php
session_start();
if(isset($_SESSION['sesion'])){
require_once"../controladores/verCreditosControlador.php";
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
    
    <title>Mis Creditos</title>
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
              <?php $var = verCreditos($_SESSION['sesion']);?>
              <?php
                if($var != 0){ ?>
              <div class="table-responsive">
                  
              
                    <table class="table ">
                        <thead>
                            <tr>
                                <td>Promoción</td>
                                <td>Fecha</td>
                                <td>N. Factura</td>
                                <td>Creditos</td>
                                <td>Precio</td>
                                <td>Estado</td>
                            </tr>
                        </thead>
                        <tbody>
              <?php          
                    foreach ($var as $fila):?>
                            <tr>
                                <td id="td-img">
                                    <img class='img-creditos' src='<?=$fila['rutaImg']?>'>
                                </td>    
                                <td>
                                    <?=$fila['fechaInteraccion']?>
                                </td>
                                <td>
                                    <?=$fila['codValidacion']?>
                                </td>
                                <td>
                                    <?=$fila['creditos']?>
                                </td>
                                <td>
                                    <?=$fila['valor']?>
                                </td>
                                <td>
                                    <?php 
                                    if($fila['confirmado']==0)echo "Sin confirmar";
                                    else echo "Confirmado";
                                    ?>
                                </td>
                        
                            </tr>    
                        <?php
                    endforeach;
                    ?>
                        </tbody>
                    </table>
                  </div>
                <?php    
                }else{
                    echo "Aun no tienes creditos registrados";
                    for($i=0; $i<22; $i++){echo"<br>";}
                }
              ?>
              
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
