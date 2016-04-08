<?php
require_once "../app/modelo.php";
require_once "../modelos/usuariosModelo.php";
session_start();

class facturaModelo extends Modelo{
	public function __construct(){
		parent::__construct();
}
		public function agregarFactura($codValidacion, $fechaVenta, $montoVenta, $idUsuario){
		$sql="INSERT INTO validaciones (codValidacion, fechaVenta, montoVenta, idUsuario) VALUES ('$codValidacion',
			'$fechaVenta', $montoVenta, '$idUsuario')";	
		$result = $this->_db->query($sql);
		if ($this->_db->error ){
		   echo "Error al guardar el registro: ".$this->_db->error;
		   return;		   
		}		
	}

	public function listarFacturas(){
		$idUsuario = $_SESSION['sesion']; 
		$sql="SELECT * FROM validaciones where idUsuario='$idUsuario'";	
		$result = $this->_db->query($sql);  
		$registros = $result->fetch_all(MYSQLI_ASSOC);  
		return $registros;	
	}

	public function listarCodExcel(){
		$idUsuario = $_SESSION['sesion']; 
		$sql="SELECT codValidacion FROM validaciones where idUsuario='$idUsuario'";		
		$result = $this->_db->query($sql);  
		$registros = $result->fetch_all(MYSQLI_ASSOC);  
		return $registros;	

	}

	public function numFilas(){
		$idUsuario = $_SESSION['sesion']; 
		$sql="SELECT count(*) FROM validaciones";		
		$result = $this->_db->query($sql);
		$registros = $result->fetch_all(MYSQLI_ASSOC);  
		return $registros;	

	}

	public function modificarFactura($idValidacion, $codValidacion, $fechaVenta, $montoVenta, $idUsuario){
		$sql="UPDATE validaciones SET codValidacion='$codValidacion', fechaVenta='$fechaVenta', montoVenta='$montoVenta'
			WHERE idValidacion= '$idValidacion'";	
		$result = $this->_db->query($sql);
		if ($this->_db->error ){
		   echo "Error al actualizar el registro: ".$this->_db->error;
		   return;		   
		}		
	}

}
?>