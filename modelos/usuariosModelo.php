<?php
require_once "../app/modelo.php";
class usuariosModelo extends Modelo{
	public function __construct(){
		parent::__construct();
	}
	
	//ver usuarios	
	public function consultarUsuario($idmail, $idpws){
		$sql="SELECT count(*) as cantidad FROM usuarios where mail='$idmail' and pws='$idpws'";	
		$result = $this->_db->query($sql); //devuelve true o false		
		$registros = $result->fetch_array(MYSQLI_ASSOC);
		return $registros;
	} 
	public function crearSesion($idmail, $idpws){
		$sql="SELECT * FROM usuarios where mail='$idmail' and pws='$idpws'";	
		$result = $this->_db->query($sql);
		$registros = $result->fetch_array(MYSQLI_ASSOC);
		
		return $registros;
	}
	
	
	public function modificarUsuario($idUsuario, $nombres, $apellidos, $feNacimiento, $sexo, $user, $pws, $web, $acerca){
		$sql="UPDATE usuarios SET pws='$pws', nombres='$nombres', apellidos='$apellidos', feNacimiento='$feNacimiento', sexo='$sexo', user='$user', web='$web', acerca='$acerca' WHERE idUsuario='$idUsuario'";
		$result = $this->_db->query($sql);
		if ($this->_db->error ){
		   echo "Error al actualizar el registro: ".$this->_db->error;
		   $registro=0;
		   return;		   
		}
		else{
			$registro=1;
		}
		return $registro;			
	}

	public function llevarDatos($idUsuario){
		$sql="SELECT * FROM usuarios where idUsuario='$idUsuario'";	
		$result = $this->_db->query($sql);
		$registros = $result->fetch_array(MYSQLI_ASSOC);
		return $registros;
	}

	public function guardarNombre($idUsuario, $nombres){
		$sql="UPDATE usuarios SET nombres='$nombres' WHERE idUsuario='$idUsuario'";
		$result = $this->_db->query($sql);
		if ($this->_db->error ){
		   echo "Error al actualizar el registro: ".$this->_db->error;
		   return;		   
		}				
	}
	public function guardarApellido($idUsuario, $apellidos){
		$sql="UPDATE usuarios SET apellidos='$apellidos' WHERE idUsuario='$idUsuario'";
		$result = $this->_db->query($sql);
		if ($this->_db->error ){
		   echo "Error al actualizar el registro: ".$this->_db->error;
		   return;		   
		}				
	}
	public function guardarFecha($idUsuario, $feNacimiento){
		$sql="UPDATE usuarios SET feNacimiento='$feNacimiento' WHERE idUsuario='$idUsuario'";
		$result = $this->_db->query($sql);
		if ($this->_db->error ){
		   echo "Error al actualizar el registro: ".$this->_db->error;
		   return;		   
		}				
	}
	public function guardarSexo($idUsuario, $sexo){
		$sql="UPDATE usuarios SET sexo=$sexo WHERE idUsuario='$idUsuario'";
		$result = $this->_db->query($sql);
		if ($this->_db->error ){
		   echo "Error al actualizar el registro: ".$this->_db->error;
		   return;		   
		}				
	}
	public function guardarUsuario($idUsuario, $user){
		$sql="UPDATE usuarios SET user='$user' WHERE idUsuario='$idUsuario'";
		$result = $this->_db->query($sql);
		if ($this->_db->error ){
		   echo "Error al actualizar el registro: ".$this->_db->error;
		   return;		   
		}				
	}
	public function guardarWeb($idUsuario, $web){
		$sql="UPDATE usuarios SET web='$web' WHERE idUsuario='$idUsuario'";
		$result = $this->_db->query($sql);
		if ($this->_db->error ){
		   echo "Error al actualizar el registro: ".$this->_db->error;
		   return;		   
		}				
	}
	public function guardarAcerca($idUsuario, $acerca){
		$sql="UPDATE usuarios SET acerca='$acerca' WHERE idUsuario='$idUsuario'";
		$result = $this->_db->query($sql);
		if ($this->_db->error ){
		   echo "Error al actualizar el registro: ".$this->_db->error;
		   return;		   
		}				
	}
	public function insertarUsuario($mail, $pws){
		$sql="INSERT INTO usuarios (mail, pws) VALUES ('$mail', '$pws') ";
		$result = $this->_db->query($sql);
		if ($this->_db->error ){
		   echo "Error al actualizar el registro: ".$this->_db->error;
		   return;		   
		}				
	}
}
?>