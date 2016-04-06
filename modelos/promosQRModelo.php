<?php
require_once "../app/modelo.php";

class promosQRModelo extends Modelo{

	public function __construct()
	{
	parent::__construct();
	}
	
	//Buscar promociòn en tabla promocionesqr
	public function verIdPromo($QR){
		$sql="SELECT nombre FROM promocionesqr WHERE id_promocion='$QR' ";	
		$result = $this->_db->query($sql);  
		$promos = $result->fetch_all(MYSQLI_ASSOC);  
		return $promos;	
	}
}	
?>