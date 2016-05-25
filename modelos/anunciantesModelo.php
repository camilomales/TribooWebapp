<?php
require_once '../app/modelo.php';
class anunciantesModelo extends Modelo{
	public function __construct(){
		parent::__construct();
	}
	public function verAnunciantesPorUsuario($idUsuario){
		$sql="SELECT * FROM anunciantes WHERE idUsuario =".$idUsuario;	
		$result = $this->_db->query($sql);  
		$registros = $result->fetch_all(MYSQLI_ASSOC);  
		return $registros;	
	}
	
	

}
?>