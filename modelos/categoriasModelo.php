<?php
require_once "../app/modelo.php";
class categoriasModelo extends Modelo{
	public function __construct(){
		parent::__construct();
	}
	public function agregarCategoria($nombre, $palabrasClave, $activo, $posicion){
		$sql="INSERT INTO categorias (nombre, palabrasClave, fechaCreacion, activo, posicion) VALUES ('$nombre',
			'$palabrasClave', CURDATE(), $activo, '$posicion')";	
		$result = $this->_db->query($sql);
		if ($this->_db->error ){
		   echo "Error al guardar el registro: ".$this->_db->error;
		   return;		   
		}		
	} 
	public function modificarCategoria($idCategoria, $nombre, $palabrasClave, $activo, $posicion){
		$sql="UPDATE categorias SET nombre='$nombre', palabrasClave='$palabrasClave', activo=$activo, posicion='$posicion'
			WHERE idCategoria = '$idCategoria'";	
		$result = $this->_db->query($sql);
		if ($this->_db->error ){
		   echo "Error al actualizar el registro: ".$this->_db->error;
		   return;		   
		}		
	}

	public function modificarFactura($idValidacion, $codValidacion, $fechaVenta, $MontoVenta, $idUsuario){
		$sql="UPDATE validaciones SET codValidacion='$codValidacion', fechaVenta='$fechaVenta', MontoVenta='$MontoVenta', idUsuario='$idUsuario'
			WHERE idValidacion = '$idValidacion'";	
		$result = $this->_db->query($sql);
		if ($this->_db->error ){
		   echo "Error al actualizar el registro: ".$this->_db->error;
		   return;		   
		}		
	}

	public function buscarIdCategoria($idCategoria){
		$sql="SELECT * FROM categorias where idCategoria='$idCategoria'";	
		$result = $this->_db->query($sql);  
		$registros = $result->fetch_array(MYSQLI_ASSOC);  
		return $registros;	
	}
	public function inhabilitarCategoria($idCategoria){
		$sql="UPDATE categorias SET activo=0 where idCategoria=$idCategoria";	
		$result = $this->_db->query($sql);
		if ($this->_db->error ){
		   echo "Error al actualizar el registro: ".$this->_db->error;
		   return;		   
		}		
	}
	public function habilitarCategoria($idCategoria){
		$sql="UPDATE categorias SET activo=1 where idCategoria=$idCategoria";	
		$result = $this->_db->query($sql);
		if ($this->_db->error ){
		   echo "Error al actualizar el registro: ".$this->_db->error;
		   return;		   
		}		
	}
	public function buscarActivoCategoria($idCategoria){
		$sql="SELECT activo FROM categorias where idCategoria=$idCategoria";	
		$result = $this->_db->query($sql);  
		$registros = $result->fetch_array(MYSQLI_ASSOC);  
		return $registros;	
	}	
	public function listarCategorias(){
		$sql="SELECT * FROM categorias order by idCategoria desc";	
		$result = $this->_db->query($sql);  
		$registros = $result->fetch_all(MYSQLI_ASSOC);  
		return $registros;	
	}

	public function listarFacturas(){
		$sql="SELECT * FROM validaciones order by idValidacion desc";	
		$result = $this->_db->query($sql);  
		$registros = $result->fetch_all(MYSQLI_ASSOC);  
		return $registros;	
	}

	public function listarCategoriasActivas(){
		$sql="SELECT * FROM categorias where activo=1";	
		$result = $this->_db->query($sql);  
		$registros = $result->fetch_array(MYSQLI_ASSOC);  
		return $registros;	
	}
}
?>
