<?php
if(isset($_POST['latitud']) && !empty($_POST['latitud'])&&
   isset($_POST['longitud']) && !empty($_POST['longitud'])
){ 
    $latitudGPS = $_POST['latitud'];
    $longitudGPS = $_POST['longitud'];
    require_once '../controladores/verPromocionesCercanasControlador.php';?>
    <?php                                        
    foreach ($a_mensajesCercanos as $row): ?>
    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
      <div class"cols-xs col-sm-3 col-md-6 col-lg-6">
          <img class="img-responsive" src="<?php echo $row['rutaImg']; ?>"><br/>
          <?php echo utf8_encode($row['descripcion']);?><br/>
          <?php echo utf8_encode($row['direccionAnu']);?><br/>
          <button class="btn-info" data-toggle="modal" data-target="#modal-aprov-prom"
          data-id="<?php echo $row['idMensaje'];?>"
          data-img="<?php echo $row['rutaImg'];?>"
          data-idmen="<?php echo $row['idMensaje'];?>"
          data-idusu="<?php echo $_SESSION['sesion'];?>"
          data-monto="<?php echo $row['valor'];?>">Aprovechar Promoción</button><hr>
      </div>
    </div>
    <?php endforeach;                
    If(count($a_mensajesCercanos)==0){ echo "No hay promociones cercanas";}
    for($i=0; $i<22; $i++){echo"<br>";}?>
<?php    
}else{
    echo "Ocurrio un error con el GPS. Intente mas tarde";
}

