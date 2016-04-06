<?php
require_once "../app/modelo.php";
class creditosModelo extends Modelo{
	public function __construct(){
		parent::__construct();
	}
	public function agregarCredito($idUsuario, $idMensaje, $fecha, $monto){
		$sql="INSERT INTO creditos (idUsuario, idMensaje, fecha, monto) 
			VALUES ($idUsuario, $idMensaje, CURDATE(), $monto)";	
		$result = $this->_db->query($sql);
		if ($this->_db->error ){
		   echo "Error al guardar el registro: ".$this->_db->error;
		   return;		   
		}		
	}
	
	public function modificarCredito($idUsuario, $idMensaje, $monto){
		$sql="UPDATE creditos SET fecha=CURDATE(), monto=$monto WHERE (idUsuario=$idUsuario and idMensaje=$idMensaje)";	
		$result = $this->_db->query($sql);
		if ($this->_db->error ){
		   echo "Error al actualizar el registro: ".$this->_db->error;
		   return;		   
		}		
	} 
	public function buscarIdCredito($idCredito){
		$sql="SELECT * FROM creditos where idCredito=$idCredito";	
		$result = $this->_db->query($sql);  
		$registros = $result->fetch_array(MYSQLI_ASSOC);  
		return $registros;	
	}
	public function eliminarCredito($idCredito){
		$sql="DELETE FROM creditos where idCredito=$idCredito";	
		$result = $this->_db->query($sql);
		if ($this->_db->error ){
		   echo "Error al borrar el registro: ".$this->_db->error;
		   return;		   
		}	
	}
	
	public function listarCreditos(){
		$sql="SELECT * FROM creditos";	
		$result = $this->_db->query($sql);  
		$registros = $result->fetch_array(MYSQLI_ASSOC);  
		return $registros;	
	}

}
?>