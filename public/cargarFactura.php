<?php  

    require_once "../controladores/verCategoriasFactura.php";
    include ("conecta.php");//incluya a la clase conecta.php o crea la coneccion
            $bd =  conectar();
            session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Triboo - Categorias</title>
<link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
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
<link href="css/fileinput.min.css" media="all"  rel="stylesheet" />
<link href="css/fileinput.css" media="all" rel="stylesheet" type="text/css" />

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/fileinput.min.js" type="text/javascript"></script>
<script src="js/jquery.min.js"></script>
<script src="js/jquery.validate.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrapValidator.min.js"></script>
<!--<script src="js/bootstrapValidator-conf.js"></script>-->
<script src="js/validacionesFormCategoria.js"></script>
<script src="js/jquery.dataTables.js"></script>
<script src="js/DT_bootstrap.js"></script>
<script src="js/jquery.dataTables-conf.js"></script>
<script type="js/fileinput.min.js"></script>
<script src="js/codigo.js">
</script>
</head>

<body>

<div id='contenedorPr' name='contenedorPr'>
    <h1>¡Bienvenido a Triboo!</h1>
    <h4>Administra tus Facturas</h4><br>
        
</div>


<div class="warper container-fluid">

<div class="panel panel-default">
    <div class="panel-heading">
    <button class="btn btn-info btn-sm" id="btnNueCat" data-toggle="modal" data-target="#modal-form">Ingresar Factura</button>
    <button class="btn btn-info btn-sm" id="btnNueCat" data-toggle="modal" data-target="#modal-formExcel">Cargar Excel</button>
    </div>


    <div class="panel-body">
    
        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="basic-datatable">
            <thead>
                <tr>
                    <th id="thOper">Opciones</th>
                    <th>#Factura</th>
                    <th>Fecha Factura</th>
                    <th>Monto</th>
                    <th>IdUsuario</th>
                    
                    
                </tr>
            </thead>
            <tbody>

               <?php foreach ($cat as $row): ?>
                <tr>
                    <td>
                        <div class="row showcase-icons">
                            <div class="col-md-3 col-sm-4">
                                <a data-toggle="modal" class="modif" href="#modal-form-act" 
                                data-id="<?php echo $row['idValidacion'];?>"
                                data-nombre="<?php echo utf8_encode($row['codValidacion']);?>"
                                data-palabras="<?php echo utf8_encode($row['fechaVenta']);?>"
                                data-estado="<?php echo $row['montoVenta'];?>"
                                data-posicion="<?php echo $row['idUsuario'];?>"><i title="Editar" class="fa fa-edit"></i></a>
                            </div>
                           
                        </div>
                        
                    </td>
                    <td class="tdCat"><?php echo utf8_encode($row['codValidacion']); ?></td>                
                    <td class="tdCat"><?php echo utf8_encode($row['fechaVenta']); ?></td>
                    <td class="tdCat"><?php echo $row['montoVenta']; ?></td>
                    <td class="tdCat"><?php echo $row['idUsuario']; ?></td>
                    
                    
                </tr>   
                <?php endforeach ?>  
            </tbody>
        </table>

    </div>
</div>
  
</div>

 <!-- Formulario nueva categoria -->
<div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Ingresa Tu Factura</h4>
      </div>
      <div class="modal-body" id="divajax">       
      <form  id="form-categ" method="post" class="validator-form" action="GuardarFactura.php" >

      <input type="hidden" name="idUsuario" id="idUsuario" value="<?php echo $_SESSION['sesion']; ?>">

            <div class="form-group">
                <label class="control-label">Numero De Factura</label>
                <input type="number" class="form-control" name="numFac" required="" />
            </div>
            <div class="form-group">
                <label class="control-label">Fecha Factura</label>
                <input type="date" class="form-control" name="fecFac" required=""/>
            </div>
            <div class="form-group">
                <label class="control-label">Monto Factura</label>
                <input type="number" class="form-control" name="monFac" required="" />
            </div>
          
            <hr class="dotted">
                <div class="form-group">
          <button type="submit" class="btn btn-primary" name="GuardarFac" id="GuardarFac" >Guardar</button>
          
        </div>
      </form>
      </div>
      
    </div>
  </div>
</div>


<!--Formulario actualizar-->
<div class="modal fade" id="modal-form-act" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Editar Factura</h4>
      </div>
      <div class="modal-body" id="divajax">       
            <form  id="form-categ-edit" method="post" class="validator-form" action="modificarFactura.php">
            <input type="hidden" name="idCat" id="idCat" value="<?php echo $id; ?>"></input>
                <div class="form-group">
                    
                    <label class="control-label">#Factura</label>
                    <input type="text" class="form-control" name="nomCatE" id="nomCatE" value=""/>
                </div>
                <div class="form-group">
                    <label class="control-label">Fecha Factura</label>
                    <input type="date" class="form-control" name="palClaE"  id="palClaE" value="" required=""/>
                  
                </div>
                <div class="form-group">
                    <label class="control-label">Monto</label><br>

                    <div class="form-group"> 
                            <input id="estadoE" type="text" value="" name="estadoE"  class="form-control">
                            <label for="estadoE"></label> 
                    </div>
                </div>
                    <div class="form-group">
                    <label class="control-label">idUsuario</label>
                    <input type="text" class="form-control" name="posicionE" id="posicionE" value=""/>
                </div>
                <hr class="dotted">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" name="btnActCat" id="btnActCat">Guardar</button>
                    <button type="button" class="btn btn-info" id="resetBtn2">Borrar</button>
                </div>
            </form>
      </div>
      
    </div>
  </div>
</div>

<!--cargar excel -->
<div class="modal fade" id="modal-formExcel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Carga tu Archivo Excel</h4>
      </div>
      <div class="modal-body" id="divajax">       
      <form  id="form-categ" method="post" class="validator-form" action="cargarExcel.php" enctype="multipart/form-data" name="form1">
        <input type="hidden" name="idUsuario" id="idUsuario" value="<?php echo $_SESSION['sesion']; ?>">
       <div class="form-group">
            <label class="control-label">Desea Actualizar la BD</label>
                    <div class="form-group">
                        <div class="switch-button xs showcase-switch-button">
                            <input id="switch-button-1" checked type="checkbox" value="s" name="radio">
                            <label for="switch-button-1"></label>
                        </div>
                    </div>
                </div>

            <div class="form-group">
                    <input type="file" name="archivo" id="archivo" class="file" multiple=true data-preview-file-type="any">
                </div>

           


          
            <hr class="dotted">
                <div class="form-group">
          <button type="submit"  class="form-control" name="button" id="button" >Guardar</button>
        </div>
      </form>
      </div>
      
    </div>
  </div>
</div>

<script>
    $("#archivo").fileinput({
        showCaption: false,
        browseClass: "btn btn-primary btn-lg",
        fileType: "any"
    });
    </script>
<?php
/*
$conexion = mysql_connect("localhost","root","");
        mysql_select_db("dbtriboo2",$conexion);

$formatos = array('.jpg','.png', '.doc', '.xls', '.xlsx');


    if(isset($_POST['button'])){
        if(isset($_POST['radio'])){
        //subir la imagen del articulo
        $nameEXCEL = $_FILES['archivo']['name'];
        $tmpEXCEL = $_FILES['archivo']['tmp_name'];
        $extEXCEL = pathinfo($nameEXCEL);
        $urlnueva = "xls/".$nameEXCEL;  
        $ext = substr($nameEXCEL, strrpos($nameEXCEL, '.'));


        if(in_array($ext, $formatos)){
        if(is_uploaded_file($tmpEXCEL)){
            //copy($tmpEXCEL,$urlnueva);    
            move_uploaded_file($tmpEXCEL, "xls/$nameEXCEL");
            echo '<div align="center"><strong>Datos Actualizados con Exito</strong></div>';
        }
        
        }else{
            //echo "formato no admitido";
            echo '<script language="javascript">alert("formato no admitido");</script>'; 
            //header("Location: index.php");

        }
    }

    }

if(isset($_POST['radio'])){
            require_once 'PHPExcel/Classes/PHPExcel/IOFactory.php';
            echo "es".$nameEXCEL;
            $objPHPExcel = PHPExcel_IOFactory::load('xls/'.$nameEXCEL);
            $objHoja=$objPHPExcel->getActiveSheet()->toArray(null,true,true,true,true);
            foreach ($objHoja as $iIndice=>$objCelda) {
    
                        echo '
                            <tr>
                                <td>'.$objCelda['A'].'</td>
                                <td>'.$objCelda['B'].'</td>
                                <td>'.$objCelda['C'].'</td>
                                <td>'.$objCelda['D'].'</td>
                                <td>'.$objCelda['E'].'</td>
                                
                            </tr>
                        ';
                $id=$objCelda['A'];         $nombre=$objCelda['B'];
                $direccion=$objCelda['C'];  $correo=$objCelda['D'];
                $telefono=$objCelda['E'];       
                                    
                if($_POST['radio']=='s'){
                    $sql="INSERT INTO validaciones  
                    (idValidacion,codValidacion, fechaVenta, montoVenta, idUsuario) 
                        VALUES                                                  ('$id','$nombre','$direccion','$correo','$telefono')";
                        mysql_query($sql);
                }
                    }

            }


         //   $self = $_SERVER['PHP_SELF']; //Obtenemos la página en la que nos encontramos
          //  header("refresh:300; url=$self");
       */  
    ?>


</body>
</html>
