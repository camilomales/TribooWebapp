<?php
require_once "../app/modelo.php";
class ubicacionesModelo extends Modelo{
	public function __construct(){
		parent::__construct();
	}
	public function agregarUbicacion($direccion, $latitud, $longitud, $fechaCreacion, $idMensaje){
		$sql="INSERT INTO ubicaciones (direccion, latitud, longitud, fechaCreacion, idMensaje) VALUES ('$direccion', $latitud, $longitud, '$fechaCreacion', $idMensaje)";	
		$result = $this->_db->query($sql);
		if ($this->_db->error ){
		   echo "Error al guardar el registro: ".$this->_db->error;
		   return;		   
		}else{
                    return 1;
                }		
	}
	public function modificarUbicacion($direccion, $municipio, $pais, $latitud, $longitud, $idMensaje){
		$sql="UPDATE ubicaciones SET direccion='$direccion', municipio=$municipio, pais='$pais', latitud=$latitud, 
			longitud=$longitud WHERE idMensaje=$idMensaje";	
		$result = $this->_db->query($sql);
		if ($this->_db->error ){
		   echo "Error al actualizar el registro: ".$this->_db->error;
		   return;		   
		}		
	} 
	public function buscarIdUbicacion($idUbicacion){
		$sql="SELECT * FROM ubicaciones where idUbicacion=$idUbicacion";	
		$result = $this->_db->query($sql);  
		$registros = $result->fetch_array(MYSQLI_ASSOC);  
		return $registros;	
	}
	public function eliminarUbicacion($idUbicacion){
		$sql="DELETE FROM ubicaciones WHERE idUbicacion=$idUbicacion";	
		$result = $this->_db->query($sql);
		if ($this->_db->error ){
		   echo "Error al borrar el registro: ".$this->_db->error;
		   return;		   
		}		
	}
	public function listarUbicaciones($idMensaje){
		$sql="SELECT * FROM ubicaciones where idMensaje=$idMensaje";	
		$result = $this->_db->query($sql);  
		$registros = $result->fetch_array(MYSQLI_ASSOC);  
		return $registros;	
	}
}	
?>