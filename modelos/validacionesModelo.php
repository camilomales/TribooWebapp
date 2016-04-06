<?php
class validacionesModelo extends Modelo{
	public function __construct(){
		parent::__construct();
	}
	public function agregarValidacion($codValidacion, $fechaVenta, $montoVenta, $idUsuario){
		$sql="INSERT INTO validaciones (codValidacion, fechaVenta, montoVenta, idUsuario) 
			VALUES ('$codValidacion', '$fechaVenta', $montoVenta, $idUsuario)";	
		$result = $this->_db->query($sql);
		if ($this->_db->error ){
		   echo "Error al guardar el registro: ".$this->_db->error;
		   return;		   
		}		
	} 
	public function modificarValidacion($idValidacion, $codValidacion, $fechaVenta, $montoVenta, $idUsuario){
		$sql="UPDATE validaciones SET codValidacion='$codValidacion', fechaVenta='$fechaVenta', 
			montoVenta=$montoVenta, idUsuario=$idUsuario WHERE idValidacion=$idValidacion";	
		$result = $this->_db->query($sql);
		if ($this->_db->error ){
		   echo "Error al actualizar el registro: ".$this->_db->error;
		   return;		   
		}		
	}
	public function buscarIdValidacion($idValidacion){
		$sql="SELECT * FROM validaciones where idValidacion=$idValidacion";	
		$result = $this->_db->query($sql);  
		$registros = $result->fetch_array(MYSQLI_ASSOC);  
		return $registros;	
	}	
	public function eliminarValidacion($idValidacion){
		$sql="DELETE FROM validaciones where idValidacion=$idValidacion";	
		$result = $this->_db->query($sql);
		if ($this->_db->error ){
		   echo "Error al borrar el registro: ".$this->_db->error;
		   return;		   
		}	
	}
	public function listarValidaciones(){
		$sql="SELECT * FROM validaciones";	
		$result = $this->_db->query($sql);  
		$registros = $result->fetch_all(MYSQLI_ASSOC);  
		return $registros;	
	}
}
?>