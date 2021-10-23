<?php
include_once 'modelo/conexion.php';
class Task extends Conexion{
  
  public function insertar(){
    if(isset($_POST['insertarBtn'])){
      if(empty($_POST['titlePost']) && empty($_POST['descPost'])){
        
        echo '<script>alert("Rellene los espacios en blanco");</script>';      
      } else {
        
        $title= $_POST['titlePost'];
        $desc= $_POST['descPost'];
        $user= $_SESSION['Usuario'];
        
        $sql= 'INSERT INTO TASKSLOGINMVC (TITLE, DESCRIPTION, 
          USERLOGIN) VALUES ("'.$title.'","'.$desc.'","'.$user.'")';
        $this->conectar()->query($sql);
        header('location: index.php');
      }
    }
  }
  
  public function mostrar(){
    $data= null;
    $user= $_SESSION['Usuario'];
    
    $sql= 'SELECT * FROM TASKSLOGINMVC WHERE USERLOGIN="'.$user.'"';
    if($consulta= $this->conectar()->query($sql)){
      while($row= $consulta->fetch(PDO::FETCH_ASSOC)){
        $data[] = $row; 
      }
    }
    return $data;
  }
  
  public function eliminar($id){
    
    $sql= 'DELETE FROM TASKSLOGINMVC WHERE ID="'.$id.'"';
    $this->conectar()->query($sql);
  }
}
?>