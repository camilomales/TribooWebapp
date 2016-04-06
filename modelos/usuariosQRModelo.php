<?php
require_once "../app/modelo.php";

class usuariosQRModelo extends Modelo{

	public function __construct()
	{
	parent::__construct();
	}
	
	//ver usuarios	
	public function verUsuariosQR(){
		$sql='SELECT * FROM usuariosqr';	
		$result = $this->_db->query($sql);  
		$usuarios = $result->fetch_all(MYSQLI_ASSOC);  
		return $usuarios;
	} 
	
	//buscar promocionesqr según id
	public function buscarIdPromocionesQR($idpromo){
		$sql="SELECT * FROM promocionesqr WHERE idPromocion='$idpromo'";	
		$result = $this->_db->query($sql);  
		$registros = $result->fetch_array(MYSQLI_ASSOC);  
		return $registros;
	} 

	//validar si el usuario y el codigo QR esta registrado
	public function buscarQR($QR){
		$sql="SELECT COUNT(*) AS cantidad FROM usuariosqr WHERE idPromocion='$QR'";		
		$result = $this->_db->query($sql); //devuelve true o false		
		$registros = $result->fetch_array(MYSQLI_ASSOC);  		
		return $registros;
		}

	//validar si el usuario y el codigo QR esta registrado
	public function buscarPromocionQR($QR){
		$sql="SELECT COUNT(*) AS cantidad FROM promocionesqr WHERE idPromocion='$QR'";		
		$result = $this->_db->query($sql); //devuelve true o false		
		$registros = $result->fetch_array(MYSQLI_ASSOC);  		
		return $registros;
		}
	
	//Guardar registro
	public function guardarUsuarioQR($QR, $correo){
		$sql="INSERT INTO usuariosqr(mail, nombre, idPromocion, fecha) VALUES ('$correo','$correo','$QR', NOW())";
		$result = $this->_db->query($sql);		
		
		if ($this->_db->error )
		  {
		   echo "Error al guardar el registro: ".$this->_db->error;
		   return;		   
		  }
		}	
	}	
?>