<?php

include_once 'conexion.php';

class Register extends Conexion {
  
  public function conInsert($usuario, $contra){
    $sql= 'INSERT INTO LOGINDB (USUARIO, PASSWORD) VALUES 
           ("'.$usuario.'", "'.$contra.'")'; 
    $consulta= $this->conectar()->query($sql);
    return $consulta;
  }
  
  public function validarForm(){
  
    if(isset($_POST['submitBtnReg'])){
      if(empty($_POST['usuarioReg']) && empty($_POST['passwordReg'])){
        echo '<script>alert("Fill in the blanks");</script>';
      }else{
        $usuario= $_POST['usuarioReg'];
        $contra= $_POST['passwordReg'];
        $contEncp= password_hash($contra, PASSWORD_DEFAULT);
        $this->conInsert($usuario, $contEncp);
        $this->iniciarSesion($usuario);
      }
    }
  }
  
  public function iniciarSesion($usuario){
    session_start();
    $_SESSION["Usuario"] = $usuario;
    header('location: access/index.php');
  }
}

?>