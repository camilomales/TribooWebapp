<?php
class listasModelo extends Modelo{
	public function __construct(){
		parent::__construct();
	}
	public function agregarLista($nombreLista, $privada, $idMensaje, $idCategoria){
		$sql="INSERT INTO listas (fechaCreacion, nombreLista, privada, idMensaje, idCategoria) 
			VALUES (CURDATE(), '$nombreLista', $privada, $idMensaje, $idCategoria)";	
		$result = $this->_db->query($sql);
		if ($this->_db->error ){
		   echo "Error al guardar el registro: ".$this->_db->error;
		   return;		   
		}		
	}
	
	public function modificarLista($nombreLista, $privada, $idMensaje, $idCategoria){
		$sql="UPDATE listas SET nombreLista='$nombreLista', privada=$privada 
			WHERE (idMensaje=$idMensaje and idCategoria=$idCategoria)";	
		$result = $this->_db->query($sql);
		if ($this->_db->error ){
		   echo "Error al actualizar el registro: ".$this->_db->error;
		   return;		   
		}		
	} 
	public function buscarIdLista($idLista){
		$sql="SELECT * FROM listas where idLista=$idLista";	
		$result = $this->_db->query($sql);  
		$registros = $result->fetch_array(MYSQLI_ASSOC);  
		return $registros;	
	}
	public function eliminarLista($idLista){
		$sql="DELETE FROM listas where idLista=$idLista";	
		$result = $this->_db->query($sql);
		if ($this->_db->error ){
		   echo "Error al borrar el registro: ".$this->_db->error;
		   return;		   
		}	
	}
	
	public function verListas(){
		$sql="SELECT * FROM listas";	
		$result = $this->_db->query($sql);  
		$registros = $result->fetch_all(MYSQLI_ASSOC);  
		return $registros;	
	}

}
?>