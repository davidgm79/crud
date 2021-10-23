<?php
include_once 'modelo/conexion.php';
class Task extends Conexion{

  public function select($id){
    $data= null;
    
    $sql= 'SELECT * FROM TASKSLOGINMVC WHERE ID="'.$id.'"';
    if($consulta= $this->conectar()->query($sql)){
      while($row= $consulta->fetch(PDO::FETCH_ASSOC)){
        $data[] = $row; 
      }
    }
    return $data;
  }
  
  public function update($id){
    if(isset($_POST['updateBtn'])){
      if(empty($_POST['titlePostEdit']) && 
         empty($_POST['descPostEdit'])){
        echo '<script>alert("Rellene los espacios en blanco");</script>';      
      } else {
        
        $title= $_POST['titlePostEdit'];
        $desc= $_POST['descPostEdit'];
        
        $sql= 'UPDATE TASKSLOGINMVC SET TITLE = "'.$title.'", 
               DESCRIPTION = "'.$desc.'" WHERE ID = "'.$id.'"';
        $this->conectar()->query($sql);
        header('location: index.php');
      }
    }
  
  }
}