<?php
require_once "../app/modelo.php";
class mensajesModelo extends Modelo{
	public function __construct(){
		parent::__construct();
	}
	public function agregarMensaje($fechaCreacion, $descripcion, $palabrasClave, $valor, $fechaInicio, $fechaFin, $hrPubInicio, $hrPubFin, $linkMasInfo, $sexo, $edad, $cumpleanos, $idTipoMensaje, $idUsuario, $rutaImg, $idLista, $idAnunciante){
            $sql = "INSERT INTO mensajes (fechaCreacion, descripcion, palabrasClave, valor, fechaInicio, fechaFin, hrPubInicio, hrPubFin, linkMasInfo, sexo, edad, cumpleanos, idTipoMensaje, activo, idUsuario, rutaImg, idLista, idAnunciante) VALUES ('$fechaCreacion', '$descripcion', '$palabrasClave', '$valor', '$fechaInicio', '$fechaFin', '$hrPubInicio', '$hrPubFin', '$linkMasInfo', '$sexo', '$edad', $cumpleanos, $idTipoMensaje, 1, $idUsuario, '$rutaImg', $idLista, $idAnunciante)";
           $result = $this->_db->query($sql);
           if ($this->_db->error ){
              echo "Error al guardar el registro: ".$this->_db->error;
              return;		   
           }else{
               return [1,  $this->_db->insert_id];
           }		
	} 
	public function modificarMensaje($idMensaje, $descripcion, $palabrasClave, $fechaInicio, $fechaFin, $diaSemana, $hrPublicacion, $linkMasInfo, $sexo, $edad, $cumpleanos, $creditos, $tipoMensaje, $idUsuario, $rutaImg){
		$sql="UPDATE mensajes SET descripcion='$descripcion', palabrasClave='$palabrasClave', fechaInicio='$fechaInicio',
			 fechaFin='$fechaFin', diaSemana='$diaSemana', hrPublicacion='$hrPublicacion', linkMasInfo='$linkMasInfo', 
			 sexo='$sexo', edad='$edad', cumpleanos=$cumpleanos, creditos=$creditos, tipoMensaje=$tipoMensaje, 
			 rutaImg='$rutaImg' WHERE idMensaje=$idMensaje";	
		$result = $this->_db->query($sql);
		if ($this->_db->error ){
		   echo "Error al actualizar el registro: ".$this->_db->error;
		   return;		   
		}		
	}
	public function buscarIdMensaje($idMensaje){
		$sql="SELECT * FROM mensajes where idMensaje=$idMensaje";	
		$result = $this->_db->query($sql);  
		$registros = $result->fetch_array(MYSQLI_ASSOC);  
		return $registros;	
	}
	public function inhabilitarMensaje(){
		$sql="UPDATE mensajes SET activo=0";	
		$result = $this->_db->query($sql);
		if ($this->_db->error ){
		   echo "Error al actualizar el registro: ".$this->_db->error;
		   return;		   
		}		
	}
	public function habilitarMensaje(){
		$sql="UPDATE mensajes SET activo=1";	
		$result = $this->_db->query($sql);
		if ($this->_db->error ){
		   echo "Error al actualizar el registro: ".$this->_db->error;
		   return;		   
		}		
	}
	public function listarMensajesActivos(){
		$sql="SELECT * FROM mensajes where activo=1";	
		$result = $this->_db->query($sql);  
		$registros = $result->fetch_all(MYSQLI_ASSOC);  
		return $registros;	
	}
	public function listarMensajesInhabilitados(){
		$sql="SELECT * FROM mensajes where activo=0";	
		$result = $this->_db->query($sql);  
		$registros = $result->fetch_all(MYSQLI_ASSOC);  
		return $registros;	
	}

}
?>