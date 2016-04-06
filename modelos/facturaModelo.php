<?php
require_once "../app/modelo.php";
require_once "../modelos/usuariosModelo.php";

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

}
?>