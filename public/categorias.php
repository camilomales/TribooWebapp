<?php  
    require_once "../controladores/verCategoriasControlador.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Triboo - Categorias</title>
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
<script src="js/jquery.validate.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrapValidator.min.js"></script>
<!--<script src="js/bootstrapValidator-conf.js"></script>-->
<script src="js/validacionesFormCategoria.js"></script>
<script src="js/jquery.dataTables.js"></script>
<script src="js/DT_bootstrap.js"></script>
<script src="js/jquery.dataTables-conf.js"></script>
<script src="js/codigo.js">
</script>
</head>

<body>
<div id='contenedorPr' name='contenedorPr'>
    <h1>¡Bienvenido a Triboo!</h1>
    <h4>Administra tus categorías</h4><br>
        
</div>


<div class="warper container-fluid">

<div class="panel panel-default">
    <div class="panel-heading">
    <button class="btn btn-info btn-sm" id="btnNueCat" data-toggle="modal" data-target="#modal-form">Crear Categoría</button></div>
    <div class="panel-body">
    
        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="basic-datatable">
            <thead>
                <tr>
                    <th id="thOper">Opciones</th>
                    <th>Nombre</th>
                    <th>Palabras Clave</th>
                    <th>Fecha de creación</th>
                    <th>Estado</th>
                    <th>Posición</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cat as $row): ?>
                <tr>
                    <td>
                        <div class="row showcase-icons">
                            <div class="col-md-3 col-sm-4">
                                <a data-toggle="modal" class="modif" href="#modal-form-act" 
                                data-id="<?php echo $row['idCategoria'];?>"
                                data-nombre="<?php echo utf8_encode($row['nombre']);?>"
                                data-palabras="<?php echo utf8_encode($row['palabrasClave']);?>"
                                data-estado="<?php echo $row['activo'];?>"
                                data-posicion="<?php echo $row['posicion'];?>"><i title="Editar" class="fa fa-edit"></i></a>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                 <a href="estadoCategoria.php?id=<?php echo $row['idCategoria'];?>&estado=<?php echo $row['activo'];?>"><i title="Cambiar estado" class="fa fa-exchange"></i></a>
                            </div>
                        </div>
                        
                    </td>
                    <td class="tdCat"><?php echo utf8_encode($row['nombre']); ?></td>                
                    <td class="tdCat"><?php echo utf8_encode($row['palabrasClave']); ?></td>
                    <td class="tdCat"><?php echo $row['fechaCreacion']; ?></td>
                    <td class="tdCat"><?php if($row['activo']==1){echo "Activo";}else{echo "Inactivo";} ?></td>
                    <td class="tdCat"><?php echo $row['posicion']; ?></td>
                    
                    
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
        <h4 class="modal-title" id="myModalLabel">Crear nueva categoría</h4>
      </div>
      <div class="modal-body" id="divajax">       
			<form  id="form-categ" method="post" class="validator-form" action="crearNuevaCategoria.php">
				<div class="form-group">
	            	<label class="control-label">Nombre</label>
	            	<input type="text" class="form-control" name="nomCat"/>
	        	</div>
	        	<div class="form-group">
	            	<label class="control-label">Palabras Clave</label>
                    <textarea class="form-control" rows="3" name="palCla"></textarea>
	            </div>
	        	<div class="form-group">
	        		<label class="control-label">Inhabilitar/habilitar</label><br>
                    <div class="col-sm-7">
                        <div class="switch-button xs showcase-switch-button">
                            <input id="switch-button-1" checked type="checkbox" value="1" name="estado">
                            <label for="switch-button-1"></label>
                        </div>
                    </div>
                </div>
				    <div class="form-group">
	            	<label class="control-label">Posicion</label>
	            	<input type="text" class="form-control" name="posicion" />
	        	</div>
	        	<hr class="dotted">
                <div class="form-group">
					<button type="submit" class="btn btn-primary" name="btnCrearCat" id="btnCrearCat">Crear</button>
					<button type="button" class="btn btn-info" id="resetBtn">Borrar</button>
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
        <h4 class="modal-title" id="myModalLabel">Editar categoría</h4>
      </div>
      <div class="modal-body" id="divajax">       
            <form  id="form-categ-edit" method="post" class="validator-form" action="modificarCategoria.php">
                <div class="form-group">
                    <input type="hidden" name="idCat" id="idCat" value="<?php echo $id; ?>"></input>
                    <label class="control-label">Nombre</label>
                    <input type="text" class="form-control" name="nomCatE" id="nomCatE" value=""/>
                </div>
                <div class="form-group">
                    <label class="control-label">Palabras Clave</label>
                    <textarea class="form-control" rows="3" name="palClaE" id="palClaE" value=""></textarea>
                  
                </div>
                <div class="form-group">
                    <label class="control-label">Inhabilitar/habilitar</label><br>
                    <div class="col-sm-7">
                        <div class="switch-button xs showcase-switch-button">
                            <input id="estadoE" type="checkbox" value="1" name="estadoE" >
                            <label for="estadoE"></label>
                        </div>
                    </div>
                </div>
                    <div class="form-group">
                    <label class="control-label">Posicion</label>
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



</body>
</html>
<?php 


?>