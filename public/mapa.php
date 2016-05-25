<?php session_start();?>
<script>
    var nuevos_marcadores = [];
    
    //FUNCION PARA QUITAR MARCADORES DE MAPA
function limpiar_marcadores(lista){
    for(i in lista)
    {
        //QUITAR MARCADOR DEL MAPA
        lista[i].setMap(null);
    }
}
function cargarmapa(){ 
    var punto = new google.maps.LatLng(1.2055747130056993,  -77.28564262390137);
    var config = {
        zoom:14,
        center:punto,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var mapa = new google.maps.Map( $("#mapa")[0], config );

    google.maps.event.addListener(mapa, "click", function(event){
       var coordenadas = event.latLng.toString();

       coordenadas = coordenadas.replace("(", "");
       coordenadas = coordenadas.replace(")", "");

       var lista = coordenadas.split(",");

       var direccion = new google.maps.LatLng(lista[0], lista[1]);

       $("#cx").val(lista[0]);
       $("#cy").val(lista[1]);
       $("#cx2").val(lista[0]);
       $("#cy2").val(lista[1]);
       var marcador = new google.maps.Marker({
           //titulo:prompt("Titulo del marcador?"),
           position:direccion,
           map: mapa, 
           animation:google.maps.Animation.DROP,
           draggable:false
       });
       //ALMACENAR UN MARCADOR EN EL ARRAY nuevos_marcadores
       nuevos_marcadores.push(marcador);

       google.maps.event.addListener(marcador, "click", function(){

       });

       //BORRAR MARCADORES NUEVOS
       limpiar_marcadores(nuevos_marcadores);
       marcador.setMap(mapa);
    });
}
</script>
<style>
    
    #mapa{
        width: 100%;
        height: 300px;
        float: left;
        background: yellow;
    }
    #infor{
        width: 400px;
        height: 400px;
        float: left;
    }
</style>
<script type="text/javascript" src="js/jquery.js"></script>
<script>
    $("#modal-crear-anun").one("mouseenter",function(){
      
        cargarmapa();
        
    });
    cargarmapa(); 
</script>
<div class="form-group">
                            <label class="control-label">Ubicación del Anuncio: </label>
                            
                    </div>
<div id="mapa">
    <h2>Mapa</h2>
</div>
<div class="form-group">
    <label class="control-label">Coordenada X</label>
    <input class="form-control" type="hidden" name="cx" id="cx" value=""/>
    <input class="form-control" type="text"  id="cx2" disabled="disable" value=""/>    
</div>
<div class="form-group">
    <label class="control-label">Coordenada Y</label>
    <input class="form-control" type="hidden" name="cy" id="cy" value=""/>
    <input class="form-control" type="text"  id="cy2" disabled="disable" value=""/>      
</div>
<div class="form-group">
    <label class="control-label">Direccion</label>
    <input type="hidden" name="idMensaje" id="idMensaje" value="<?=$_SESSION['idAnuncio']?>"/>
    <input class="form-control" required type="text" name="direccion" id="direccion"/>
</div>