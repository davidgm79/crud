<?php
include_once 'conexion.php';
class Editar extends Conexion {

  public function editarSelect($id){
    $sql= 'SELECT * FROM PRODUCTOSMVC WHERE ID="'.$id.'"';
    $consulta= $this->conectar()->query($sql);
  }
  
  public function editarInsertar($nombre,$precio,$fecha){
    $sql= 'UPDATE PRODUCTOSMVC SET NOMBRE="'.$nombre.'",
           SET PRECIO="'.$precio.'", 
           SET FECHA="'.$fecha.'"';
    $consulta= $this->conectar()->query($sql);
  }
}  
  