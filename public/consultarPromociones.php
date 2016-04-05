<script src="js/aprovecharPromociones.js"></script>
<script src="js/jquery.validate.js"></script>
<script src="js/bootstrapValidator.min.js"></script>
<script src="js/validacionesFormInteraccion.js"></script>

<?php
session_start();
$fechaInt=date('Y-m-d H:i:s');
if(isset($_POST['opc1']) && isset($_POST['opc2'])){
	require_once "../controladores/verPromoXInteresYTiempoControlador.php";?>
	<div class="container">
		<div class="row"><?php
			foreach ($msj as $row): ?>
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
			if($contar==0) echo "No hay promociones vigentes";?>
	    </div>
	</div>
	<?php
}elseif(isset($_POST['opc1'])){
	require_once "../controladores/verPromoXInteresControlador.php";?>
	<div class="container">
		<div class="row"><?php
			foreach ($msj2 as $row): ?>
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
			if($contar==0) echo "No hay promociones vigentes";?>
	    </div>
	</div>
	<?php
}elseif(isset($_POST['opc2'])){
	require_once "../controladores/verPromoXTiempoControlador.php";?>
	
	<div class="container">
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
			if($contar==0) echo "No hay promociones vigentes";?>
	    </div>
	</div>
	<?php
}
else{
	echo "Elige una opción";
}
?>

<!--div flotante para aprovechar promociones -->
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
	        	<hr class="dotted">
                <div class="form-group">
					<button type="submit" class="btn btn-primary" name="btnCrearCat" id="btnCrearCat">Aceptar</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
				</div>
				<div id="hola"></div>
			</form>
      </div>
      
    </div>
  </div>
</div>

