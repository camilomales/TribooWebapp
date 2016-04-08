<?php
class anunciantesModelo extends Modelo{
	public function __construct(){
		parent::__construct();
	}
	public function verAnunciantesPorUsuario($idUsuario){
		$sql="SELECT * anunciantes WHERE idUsuario =".$idUsuario;	
		$result = $this->_db->query($sql);  
		$registros = $result->fetch_array(MYSQLI_ASSOC);  
		return $registros;	
	}
	
	

}
?>