<?php
session_start();
require_once"../controladores/verPromoXTiempoControlador.php";
require_once"../controladores/verTipoMensajeControlador.php";
require_once"../controladores/verListasControlador.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="images/favicon.png">

    <title>Mis momentos - Triboo</title>
    <link href="css/estilostriboo.css" rel="stylesheet">
    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    
    <link href="css/style2.css" rel="stylesheet">
    <link href="css/style-responsive2.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/daterangepicker.css" />
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script src="js/jquery.js"></script>
    <script src="js/anuncio.js"></script>
	
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->
  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">
      <header class="header">
            <!--logo start-->
            <a href="index.html" class="logo"><img src="images/logo-triboo.png"></a>
            <!--logo end-->
            <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
                    
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="images/avatar1_small.jpg">
                            </span>
                            <span class="username">Carolina Acosta</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
                                <a href="#"><i class="icon_profile"></i> Editar perfil</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon_mail_alt"></i> Configuracion de Cuenta</a>
                            </li>
                             <li>
                                <a href="cargar_facturas.php"><i class="icon_mail_alt"></i> Cargar facturas</a>
                            </li>
                            <li>
                                <a href="cerrar.php"><i class="icon_key_alt"></i> Cerrar sesión</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon_clock_alt"></i>Ayuda</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon_chat_alt"></i> Inf. un problema</a>
                            </li>
                            
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header>

      <div class="medio">
        <div class="row">
          <div class="toggle-nav">
                  <div class="icon-reorder tooltips" data-original-title="Menu" data-placement="bottom"><i class="icon_menu"></i>
                  </div><spam>5 Promociones sin respuesta en esta zona</spam>
          </div>
        </div>
      
      <hr>
      </div>
      <!--header end-->

      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">
                                 
                  <li class="active">
                      <a href="triboo.php"class="">
                          <i class="icon_star_alt"></i>
                          <span><b>Promociones</b></span>
                      </a>
                  </li>
                
                  <li class="active">
                      <a href="misMomentos.php" class="">
                          <div class="verPromos">
                            <i class="icon_document_alt"></i>
                            <span>Mis Momentos</span>                          
                          </div>                          
                      </a>                      
                  </li>                 
                  <li class="active">
                      <a href="misGustos.php" class="">
                          <div class="verPromos">
                            <i class="icon_document_alt"></i>
                            <span>Mis Gustos</span>                          
                          </div>  
                      </a>                      
                  </li>
                                
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!--main content start-->
      <section id="main-content">
        <section class="wrapper">
            <div>
            <button class="btn-info" id="btn-anuncio" data-toggle="modal" data-target="#modal-crear-anun">Crear Anuncio</button>
            </div>
	
	
		
            <div class="row"><?php
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
                  if($contar==0){ 
                  for($i=0; $i<22; $i++){echo"<br>";}}?>
            </div>        
        </section>
      </section>
      <!--main content end-->
      <div class="footer-main">
          Privacidad - Condiciones - Más - Triboo &copy 2015 
      </div>      
  </section>
  <!-- container section start -->

  <div class="modal fade" id="modal-aprov-prom" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Aprovechar Promoción</h4>
      </div>
      <div class="modal-body">
          <div id="img"></div>       
      <form  id="form-inter" method="post" class="validator-form" action="guardarInteraccion.php">
        <div class="form-group">
          <input type="hidden" class="form-control" name="idmensaje" id="idmensaje" value=''/>
          <label class="control-label">Valor: </label>
          <input type="hidden" class="form-control" name="montovlr" id="montovlr" value=''/>                
                <input type="text" class="form-control" name="monto" id="monto" disabled="disabled" value=''/>                
            </div>
            <div class="form-group">
          <label class="control-label">No de Factura: </label>
                <input type="text" class="form-control" name="factura" id="factura"/>               
            </div>
            
                <div class="form-group">
          <button type="submit" class="btn btn-primary" name="btnCrearCat" id="btnCrearCat">Aceptar</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        </div>
        
      </form>
      </div>
      
    </div>
  </div>
</div>

<!-- Modal crear anuncio -->
<div class="modal fade" id="modal-crear-anun" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h3 class="modal-title" id="myModalLabel">Crear Anuncio</h3>
        
      </div>
        <div id="div-respuesta"></div>
      <div class="modal-body">
            <!--Formulario para el mapa(ubicaciones)-->
            <form id="form-agre-ubi" method="post" class="validator-form" action="agregarUbicaciones.php">
                <div id="ajax"></div>
                <button type="button" class="btn btn-success" name="btnGuardar" id="btnGuardar">Guardar y Terminar</button>
                <button type="button" class="btn btn-info" name="btnUbicacion" id="btnUbicacion">Guardar y asignar otra ubicación</button>
            </form>
            
            <!--formulario para mensajes-->
            <form id="form-crear-anun" method="POST" class="validator-form" action="crearAnuncio.php">
                <div id="anuncioParte1">
                    <div class="form-group">
                        <label class="control-label" for="daterange"> Fecha activa del anuncio: </label>
                        <div class="input-group">        
                            <span class="input-group-addon" ><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
                            <input type="text" class="form-control" name="daterange" id="daterange" value="2016-03-03 1:30 PM - 2016-03-03 2:00 PM" />
                        </div>
                    </div>
                
                    <div class="form-group">					
                        <label class="control-label">Descripción: </label>
                        <textarea name="descripcion" id="descripcion" class="form-control" rows="3" placeholder="Detalla brevemente tu anuncio. Ej: Descuentos en todo el calzado"></textarea>                
                    </div>
                    <div class="form-group">					
                        <label class="control-label">Palabras Clave: </label>
                        <textarea name="palabrasClave" id="palabrasClave" class="form-control" rows="3" placeholder="Ingresa palabras seguidas de una coma (,) que identifiquen tu anuncio"></textarea>                
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label">Valor: </label>
                        <div class="input-group">        
                            <span class="input-group-addon">$</span>
                            <input type="text" name="valor" id="valor" class="form-control" autocomplete="off" placeholder="Ej. 15.000" id="formato-val" onkeyup="formatoValor(this)" onchange="formatValor(this)" >
                            <span class="input-group-addon">.00</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Tipo de Anuncio: </label>
                        <select class="form-control" name="idTipoMensaje" id="idTipoMensaje">
                            <option disabled selected>Seleccione</option>
                            <?php
                            foreach ($tipoMens as $fila):?>
                            <option value="<?=$fila['idTipoMensaje']?>"><?=utf8_encode($fila['descripcion'])?></option>
                            <?php                            
                            endforeach;
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Ubiquelo en una lista: </label>
                        <select class="form-control" id="idLista" name="idLista">
                            <option disabled selected>Seleccione</option>
                            <?php
                            foreach ($listas as $fila):?>
                            <option value="<?=$fila['idLista']?>"><?=utf8_encode($fila['nombreLista'])?></option>
                            <?php                            
                            endforeach;
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Cargue su Anuncio</label>
                        
                        <input class="form-control" type="file"  id="rutaImg" name="rutaImg" />    
                    </div>
                </div>
                <!-- Información extra para el formulario-->
                <div id="anuncioParte2">
                    <div class="form-group">
                        <label class="control-label">Restringir por género</label>
                        <select class="form-control" name="sexo" id="sexo">
                            <option value="">Ninguno</option>
                            <option value="M">Masculino</option>
                            <option value="F">Femenino</option>
                        </select>    
                    </div>
                    <div class="form-group">
                        <label class="control-label">Restringir por Edad</label>
                        <input class="form-control" type="Text" name="edad" id="edad" placeholder="Ej. Mayores de 15 años"/>    
                    </div>
                    
                    <label class="control-label">Aplica solo para cumpleaños</label><br>
                    <input type="radio" name="cumpleanos" id="cumpleSi" value="1"/>Si<br>    
                    <input type="radio" name="cumpleanos" id="cumpleNo" value="0" checked/>No<br><br>
                    <div class="form-group">
                        <label class="control-label">Link para mayor información</label>
                        <input class="form-control" name="linkMasInfo" id="linkMasInfo" type="Text" placeholder="Ej. www.ejemplo.com"/>    
                    </div>
                </div>
                <div id="botones-crear-anun">
                    <div class="form-group">
                        
                        <button type="button" class="btn btn-success" name="btnContinuar" id="btnContinuar">Continuar</button>
                        <button type="button" class="btn btn-info" name="btnInfoExtra" id="btnInfoExtra">Añadir información extra</button>
                        <button type="button" class="btn btn-info" name="btnForm" id="btnForm">Volver</button>
                        <button type="button" class="btn btn-default" id="btnCanc" data-dismiss="modal">Cancelar</button>
                    </div>
                </div>
            </form>
            
      </div>
    </div>
  </div>
</div>

    <!-- javascripts -->
	
    <script src="js/jquery-ui-1.10.4.min.js"></script>
    <script src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- charts scripts -->
    <script src="assets/jquery-knob/js/jquery.knob.js"></script>
    <script src="js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="js/owl.carousel.js" ></script>
    <!-- jQuery full calendar -->
    
    <!--script for this page only-->
    
  <script src="js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="js/jquery.customSelect.min.js" ></script>
  
   
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="js/aprovecharPromociones.js"></script>
    <script src="js/jquery.validate.js"></script>
    <script src="js/bootstrapValidator.min.js"></script>
    <script src="js/validacionesFormInteraccion.js"></script>
    <script src="js/ajusteModal.js"></script>
    <script src="assets/inputmask/jquery.inputmask.bundle.js"></script>
    <script type="text/javascript" src="js/moment.min.js"></script>
    <script type="text/javascript" src="js/daterangepicker.js"></script>
  <script>

      

      //carousel
      $(document).ready(function() {
          $("#owl-slider").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });
    
    /* ---------- Map ---------- */
  $(function(){
    $('#map').vectorMap({
      map: 'world_mill_en',
      series: {
        regions: [{
          values: gdpData,
          scale: ['#000', '#000'],
          normalizeFunction: 'polynomial'
        }]
      },
    backgroundColor: '#eef3f7',
      onLabelShow: function(e, el, code){
        el.html(el.html()+' (GDP - '+gdpData[code]+')');
      }
    });
  });



  </script>

  </body>
</html>
