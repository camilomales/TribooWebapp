<?php 
require_once "config.php";

class Modelo
{
 protected $_db;

 public function __construct()
 {
  $this->_db = new mysqli('localhost', 'root', "", 'dbtriboo');    

  if ( $this->_db->connect_errno )
  {
   echo "Fallo al conectar a MySQL";
   return; 
  }

  $this->_db->set_charset('utf-8');
 }
}
?> 