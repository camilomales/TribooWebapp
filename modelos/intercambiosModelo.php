<?php 
require_once "../app/modelo.php";
class intercambiosModelo extends Modelo{
	public function __construct(){
		parent::__construct();
	}
	public function agregarIntercambio($idUsuario, $idMensaje, $fecha, $monto){
		$sql="INSERT INTO intercambios (idUsuario, idMensaje, fecha, monto) 
			VALUES ($idUsuario, $idMensaje, CURDATE(), $monto)";	
		$result = $this->_db->query($sql);
		if ($this->_db->error ){
		   echo "Error al guardar el registro: ".$this->_db->error;
		   return;		   
		}		
	}
	
	public function modificarIntercambio($idUsuario, $idMensaje, $monto){
		$sql="UPDATE intercambios SET fecha=CURDATE(), monto=$monto WHERE (idUsuario=$idUsuario and idMensaje=$idMensaje)";	
		$result = $this->_db->query($sql);
		if ($this->_db->error ){
		   echo "Error al actualizar el registro: ".$this->_db->error;
		   return;		   
		}		
	} 
	public function buscarIdIntercambio($idIntercambio){
		$sql="SELECT * FROM intercambios where idIntercambio=$idIntercambio";	
		$result = $this->_db->query($sql);  
		$registros = $result->fetch_array(MYSQLI_ASSOC);  
		return $registros;	
	}
	public function eliminarIntercambio($idIntercambio){
		$sql="DELETE FROM intercambios where idIntercambio=$idIntercambio";	
		$result = $this->_db->query($sql);
		if ($this->_db->error ){
		   echo "Error al borrar el registro: ".$this->_db->error;
		   return;		   
		}	
	}
	
	public function listarIntercambios(){
		$sql="SELECT * FROM intercambios";	
		$result = $this->_db->query($sql);  
		$registros = $result->fetch_array(MYSQLI_ASSOC);  
		return $registros;	
	}
}

?>