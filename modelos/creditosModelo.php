<?php
require_once "../app/modelo.php";
class creditosModelo extends Modelo{
	public function __construct(){
		parent::__construct();
	}
	public function listarCreditos($idUsuario){
		$sql="SELECT * FROM mensajes as m INNER JOIN interacciones as i ON m.idMensaje=i.idMensaje WHERE i.idUsuario =".$idUsuario;	
		$result = $this->_db->query($sql);  			
                $cantidad = $result->num_rows;
                $registros = $result->fetch_all(MYSQLI_ASSOC);	
                return $registros;
	}
	
	

}
?>