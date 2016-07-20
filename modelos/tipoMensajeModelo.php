<?php
require_once "../app/modelo.php";

class tipoMensajeModelo extends Modelo{

	public function __construct(){
            parent::__construct();
	}
	
	public function verTipoMensaje(){
		$sql='SELECT * FROM tipomensaje';	
		$result = $this->_db->query($sql);  
		$tiposM = $result->fetch_all(MYSQLI_ASSOC);  
		return $tiposM;
	} 
	
		
}	
?>