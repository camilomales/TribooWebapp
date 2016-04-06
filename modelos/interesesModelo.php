<?php
require_once "../app/modelo.php";
class interesesModelo extends Modelo{
	public function __construct(){
		parent::__construct();
	}
	public function agregarInteres($idUsuario, $idCategoria){
		$sql="INSERT INTO intereses (idUsuario, idCategoria) VALUES ($idUsuario, $idCategoria)";	
		$result = $this->_db->query($sql);
		if ($this->_db->error ){
		   echo "Error al guardar el registro: ".$this->_db->error;
		   return;		   
		}		
	} 
	public function modificarInteres($idInteres, $idUsuario, $idCategoria){
		$sql="UPDATE intereses SET idUsuario=$idUsuario, idCategoria=$idCategoria
			WHERE idInteres=$idInteres";	
		$result = $this->_db->query($sql);
		if ($this->_db->error ){
		   echo "Error al actualizar el registro: ".$this->_db->error;
		   return;		   
		}		
	}
	public function eliminarInteres($idUsuario, $idCategoria){
		$sql="DELETE FROM intereses where idUsuario=$idUsuario and idCategoria=$idCategoria";	
		$result = $this->_db->query($sql);
		if ($this->_db->error ){
		   echo "Error al borrar el registro: ".$this->_db->error;
		   return;		   
		}	
	}	
	public function buscarIdInteres($idInteres){
		$sql="SELECT * FROM intereses where idInteres=$idInteres";	
		$result = $this->_db->query($sql);  
		$registros = $result->fetch_array(MYSQLI_ASSOC);  
		return $registros;	
	}

	//valida si el interes ya esta regitrado
	public function verificarInteres($idUsuario, $idCategoria){
		$sql="SELECT COUNT(*) as cantidad FROM intereses where idUsuario=$idUsuario and idCategoria=$idCategoria";	
		$result = $this->_db->query($sql);
		$registros = $result->fetch_array(MYSQLI_ASSOC);  		
		return $registros;
	}


	public function listarIntereses(){
		$sql="SELECT * FROM intereses";	
		$result = $this->_db->query($sql);  
		$registros = $result->fetch_all(MYSQLI_ASSOC);  
		return $registros;	
	}
	public function listarInteresesUsuario($idUsuario){
		$sql="SELECT * FROM intereses WHERE idUsuario=$idUsuario";	
		$result = $this->_db->query($sql);  
		$registros = $result->fetch_all(MYSQLI_ASSOC);  
		return $registros;	
	}
	
}
?>