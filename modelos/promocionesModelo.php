<?php
require_once "../app/modelo.php";
class promocionesModelo extends Modelo{
	public function __construct(){
		parent::__construct();
	}
        
    public function verEventos(){
            ini_set('date.timezone','America/Bogota'); 
            $date=date('Y-m-d');
            $sql="SELECT * FROM mensajes INNER JOIN anunciantes on anunciantes.idAnunciante=mensajes.idAnunciante WHERE evento = 1 AND '".$date."' BETWEEN fechaInicio AND fechaFin";
            $result = $this->_db->query($sql);  
            $registros = $result->fetch_all(MYSQLI_ASSOC);  
            return $registros;
	}
        
    public function cantidadPromocionesAct(){
            ini_set('date.timezone','America/Bogota'); 
            $date=date('Y-m-d');
            $sql="SELECT COUNT(*) as cantidad FROM mensajes WHERE '".$date."' BETWEEN fechaInicio AND fechaFin and evento = 0";
            $result = $this->_db->query($sql);  
            $registros = $result->fetch_array(MYSQLI_ASSOC);  
            return $registros;
    }
     
	public function promocionesXInteresYTiempo($idUsuario){
            $sql="SELECT idMensaje, valor, mensajes.descripcion as descripcionMsj, tipomensaje.descripcion as descripcionTipo, direccion, hrPubInicio, hrPubFin, rutaImg from intereses 
                    inner join categorias on intereses.idCategoria=categorias.idCategoria 
                    inner join listas on categorias.idCategoria=listas.idCategoria 
                    inner join mensajes on listas.idlista=mensajes.idLista 
                    inner join tipomensaje on tipomensaje.idTipoMensaje=mensajes.idTipoMensaje 
                    inner join anunciantes on anunciantes.idAnunciante=mensajes.idAnunciante 
                    where intereses.idUsuario=$idUsuario and mensajes.activo=1 and CURDATE() <= fechaFin 
                    and (CURTIME() BETWEEN TIME(hrPubInicio) and TIME(hrPubFin))";
            $result = $this->_db->query($sql);  
            $registros = $result->fetch_all(MYSQLI_ASSOC);  
            return $registros;	
	}

	public function promocionesXInteres($idUsuario){
            ini_set('date.timezone','America/Bogota'); 
            $date=date('Y-m-d');
            $sql="SELECT idMensaje, valor, nombreLista, mensajes.descripcion as descripcionMsj, tipomensaje.descripcion as descripcionTipo, direccion, fechaFin, rutaImg FROM intereses 
                    inner join categorias on intereses.idCategoria=categorias.idCategoria 
                    inner join listas on categorias.idCategoria=listas.idCategoria 
                    inner join mensajes on listas.idlista=mensajes.idLista 
                    inner join tipomensaje on tipomensaje.idTipoMensaje=mensajes.idTipoMensaje 
                    inner join anunciantes on anunciantes.idAnunciante=mensajes.idAnunciante 
                    where intereses.idUsuario=$idUsuario and mensajes.activo=1 and '".$date."' <= fechaFin and evento = 0";
            $result = $this->_db->query($sql);  
            $registros = $result->fetch_all(MYSQLI_ASSOC); 
            
            return $registros;	
	}

	public function promocionesXTiempo($idUsuario){
            ini_set('date.timezone','America/Bogota'); 
            $date=date('Y-m-d');
            $time=date('H:i:s');
            //echo $date." - ".$time; 
            $sql="SELECT idMensaje, valor, mensajes.descripcion as descripcionMsj, tipomensaje.descripcion as descripcionTipo, direccion, hrPubInicio, hrPubFin, rutaImg FROM mensajes 
                    inner join tipomensaje on tipomensaje.idTipoMensaje=mensajes.idTipoMensaje 
                    inner join anunciantes on anunciantes.idAnunciante=mensajes.idAnunciante 
                    where activo=1 and '$date' <= fechaFin and ('$time' BETWEEN TIME(hrPubInicio) and TIME(hrPubFin)) and evento = 0";
            //echo $sql;        	
            $result = $this->_db->query($sql);  
            $registros = $result->fetch_all(MYSQLI_ASSOC);  
            return $registros;	
	}

	public function verPromociones(){
            $sql="SELECT idMensaje,  valor,mensajes.descripcion as descripcionMsj, tipomensaje.descripcion as descripcionTipo, direccion, rutaImg from mensajes
                    inner join tipomensaje on tipomensaje.idTipoMensaje=mensajes.idTipoMensaje 
                    inner join anunciantes on anunciantes.idAnunciante=mensajes.idAnunciante WHERE  evento = 0 order by idMensaje ";
            $result = $this->_db->query($sql);  
            $registros = $result->fetch_all(MYSQLI_ASSOC);  
            return $registros;
	}


    public function promocionesCercanasArea($lat,$lgt,$latMin,$latMax,$lgtMin,$lgtMax,$distancia){
        $sql="SELECT m.idMensaje, valor, descripcion, a.direccion as direccionAnu, rutaImg,(6371 * ACOS( 
                                       COS(RADIANS('$lat')) 
                                     * COS(RADIANS(latitud)) 
                                     * COS(RADIANS(longitud) 
                                     - RADIANS('$lgt')) 
                                     + SIN(RADIANS('$lat')) 
                                     * SIN(RADIANS(latitud)) 
                                    )
                        ) AS distanciaHaversine
            FROM mensajes m inner join ubicaciones u on m.idMensaje=u.idMensaje inner join anunciantes a on m.idAnunciante=a.idAnunciante
            WHERE (latitud BETWEEN '$latMin' AND '$latMax')
                   AND (longitud BETWEEN '$lgtMin' AND '$lgtMax')           
            HAVING distanciaHaversine < '$distancia' /*  KM  a la redonda */
            ORDER BY distanciaHaversine ASC";
        $result = $this->_db->query($sql);  
        $registros = $result->fetch_all(MYSQLI_ASSOC);  
        return $registros;
    }

    public function promocionesCercanas($lat,$lng,$distancia){
        $sql="SELECT DISTINCT m.idMensaje,valor,descripcion,a.direccion as direccionAnu ,rutaImg,(6371 * ACOS( 
                                       COS(RADIANS('$lat')) 
                                     * COS(RADIANS(latitud)) 
                                     * COS(RADIANS(longitud) 
                                     - RADIANS('$lng')) 
                                     + SIN(RADIANS('$lat')) 
                                     * SIN(RADIANS(latitud)) 
                                    )
                        ) AS distanciaHaversine
            FROM mensajes m inner join ubicaciones u on m.idMensaje=u.idMensaje inner join anunciantes a on m.idAnunciante=a.idAnunciante
            HAVING distanciaHaversine < '$distancia'
            ORDER BY distanciaHaversine ASC";    

        //$sql="SELECT *, ( 6371 * ACOS( COS( RADIANS(1.219114) ) * COS(RADIANS( latitud ) ) * COS(RADIANS( longitud ) - RADIANS(-77.281837) ) + SIN( RADIANS(1.219114) ) * SIN(RADIANS( latitud ) ) ) ) AS distance FROM ubicaciones HAVING distance < 1 ORDER BY distance ASC";
        $result = $this->_db->query($sql);
        $registros = $result->fetch_all(MYSQLI_ASSOC);
        return $registros;  
    }
}
?>