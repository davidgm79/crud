<?php

include_once 'conexion.php';

class Modelo extends Conexion {

  
  public function conSelect($usuario){
    $sql= 'SELECT * FROM LOGINDB WHERE USUARIO="'.$usuario.'"'; 
    $consulta= $this->conectar()->query($sql);
    return $consulta;
  }
  
  public function conInsert($usuario, $contra){
    $sql= 'INSERT INTO LOGINDB (USUARIO, PASSWORD) VALUES 
           ("'.$usuario.'", "'.$contra.'")'; 
    $consulta= $this->conectar()->query($sql);
    return $consulta;
  }
  
}

?>