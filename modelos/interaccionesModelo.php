<?php
require_once "../app/modelo.php";
class interaccionesModelo extends Modelo{
	public function __construct(){
		parent::__construct();
	}
	public function agregarInteraccion($idUsuario, $idMensaje, $fechaInteraccion, $monto, $codValidacion, $calificacion, $calificacionTiempo, $calificacionProducto, $observacion ){
		$sql="INSERT INTO interacciones (idUsuario, idMensaje, latitud, longitud, fechaInteraccion, tipoInteraccion, monto, calificacion, calificacionTiempo, calificacionProducto, observacion, codValidacion) 
			VALUES ($idUsuario, $idMensaje, 7651651, 75616515, '$fechaInteraccion', 1, $monto, $calificacion, $calificacionTiempo, $calificacionProducto, '$observacion', '$codValidacion')";
                echo $sql;
		$result = $this->_db->query($sql);
		if ($this->_db->error ){
		   echo "Error al guardar el registro: ".$this->_db->error;
		   return;		   
		}		
	}
	public function modificarInteraccion($idUsuario, $idMensaje, $latitud, $longitud, $codValidacion){
		$sql="UPDATE interacciones SET latitud=$latitud, longitud=$longitud, fechaInteraccion=NOW(), 
			codValidacion='$codValidacion' WHERE (idUsuario=$idUsuario and idMensaje=$idMensaje)";	
		$result = $this->_db->query($sql);
		if ($this->_db->error ){
		   echo "Error al actualizar el registro: ".$this->_db->error;              
		   return;		   
		}		
	} 
	public function buscarIdInteraccion($idInteraccion){
		$sql="SELECT * FROM interacciones where idInteraccion=$idInteraccion";	
		$result = $this->_db->query($sql);  
		$registros = $result->fetch_array(MYSQLI_ASSOC);  
		return $registros;	
	}
	public function eliminarInteraccion($idInteraccion){
		$sql="DELETE FROM interacciones WHERE idInteraccion=$idInteraccion";	
		$result = $this->_db->query($sql);
		if ($this->_db->error ){
		   echo "Error al borrar el registro: ".$this->_db->error;
		   return;		   
		}		
	}
	public function listarInteracciones($idMensaje){
		$sql="SELECT * FROM interacciones";	
		$result = $this->_db->query($sql);  
		$registros = $result->fetch_array(MYSQLI_ASSOC);  
		return $registros;	
	}

}	
?>