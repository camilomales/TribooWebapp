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
          
                <input type="text" class="form-control" name="factura" id="factura"/>               
            </div>
        <div class="form-group">
            <label class="control-label">Califique el servicio:  </label>
            <div id="stars-default"><input type=hidden name="rating"/></div>

            <div id="calificacion">Sin evaluar</div>
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
            <form id="form-agre-ubi" method="post" class="validator-form" action="agregarUbicacion.php">
                <div id="ajax"></div>
                <button type="button" class="btn btn-success" name="btnGuardar" id="btnGuardar">Guardar y Terminar</button>
                <button type="button" class="btn btn-info" name="btnUbicacion" id="btnUbicacion">Guardar y asignar otra ubicación</button>
                <div id="div-agr-ubi"></div>
            </form>
            
            <!--formulario para mensajes-->
            <form id="form-crear-anun" method="POST" class="validator-form" action="crearAnuncio.php">
                <div id="anuncioParte1">
                    <div class="form-group">
                        <label class="control-label">Cargue su Anuncio</label>
                        
                        <input class="form-control" required type="file"  id="rutaImg" name="rutaImg" />    
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="daterange"> Fecha activa del anuncio: </label>
                        <div class="input-group">        
                            <span class="input-group-addon" ><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
                            <input type="text" required class="form-control" name="daterange" id="daterange" />
                        </div>
                    </div>
                
                    <div class="form-group">					
                        <label class="control-label">Descripción: </label>
                        <textarea name="descripcion" id="descripcion" required class="form-control" rows="3" placeholder="Detalla brevemente tu anuncio. Ej: Descuentos en todo el calzado"></textarea>                
                    </div>
                    <div class="form-group">					
                        <label class="control-label">Palabras Clave: </label>
                        <textarea required name="palabrasClave" id="palabrasClave" class="form-control" rows="3" placeholder="Ingresa palabras seguidas de una coma (,) que identifiquen tu anuncio"></textarea>                
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label">Valor: </label>
                        <div class="input-group">        
                            <span class="input-group-addon">$</span>
                            <input type="text" required name="valor" id="valor" class="form-control" autocomplete="off" placeholder="Ej. 15.000" id="formato-val" onkeyup="formatoValor(this)" onchange="formatValor(this)" >
                            <span class="input-group-addon">.00</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Tipo de Anuncio: </label>
                        <select class="form-control" required name="idTipoMensaje" id="idTipoMensaje">
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
                        <select class="form-control" required id="idLista" name="idLista">
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
                        <label class="control-label">Seleccione su establecimiento: </label>
                        <select class="form-control" required id="idAnunciante" name="idAnunciante">
                            <option disabled selected>Seleccione</option>
                            <?php
                            $establecimiento = verEstablecimiento($idUsuario);
                            foreach ($establecimiento as $fila):?>
                            <option value="<?=$fila['idAnunciante']?>"><?=utf8_encode($fila['establecimiento'])?></option>
                            <?php                            
                            endforeach;
                            ?>
                        </select>
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
                        
                        <button type="submit" class="btn btn-success" name="btnContinuar" id="btnContinuar">Continuar</button>
                        <button type="button" class="btn btn-info" name="btnInfoExtra" id="btnInfoExtra" data-but="1">Añadir información extra</button>
                        <button type="button" class="btn btn-info" name="btnForm" id="btnForm" >Volver</button>
                        <button type="button" class="btn btn-default" id="btnCanc" data-dismiss="modal">Cancelar</button>
                    </div>
                </div>
            </form>
            
      </div>
    </div>
  </div>
</div>

<!--Modal Editar Perfil-->

<div class="modal fade" id="modal-editar-perfil" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h3 class="modal-title" id="myModalLabel">Editar Perfil</h3>
        
      </div>        
      <div class="modal-body">
          <div id="ajax-perfil"></div>
      </div>
    </div>
  </div>
</div>

<!--Modal intereses-->

<div class="modal fade" id="modal-intereses" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h3 class="modal-title" id="myModalLabel">Tus intereses</h3>
        
      </div>        
      <div class="modal-body">
          <div id="ajax-intereses">aqui</div>
          
      </div>
    </div>
  </div>
</div>