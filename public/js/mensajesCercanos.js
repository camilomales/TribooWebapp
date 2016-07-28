function localize(){
    if (navigator.geolocation){
        navigator.geolocation.getCurrentPosition(mapa,error);
    }else{
        alert('Tu navegador no soporta geolocalizacion.');
    }
}
 
function mapa(pos){

        var latitud = pos.coords.latitude;
        var longitud = pos.coords.longitude;
        var precision = pos.coords.accuracy;

        $.ajax({
            data: 'latitud='+latitud+'&longitud='+longitud,
            url: 'verMensajesCercanos.php',
            type: 'POST',

            beforeSend: function () {                
                    $("#msjCercanos").html("Enviando, espere por favor...");                    
            },
            success:  function (data) {
                    $("#msjCercanos").html(data);
            }
        });

}

function error(errorCode){
        if(errorCode.code == 1)
                alert("No has permitido buscar tu localizacion")
        else if (errorCode.code==2)
                alert("Posicion no disponible")
        else
                alert("Ha ocurrido un error")
}


