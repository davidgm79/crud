<?php

  if(isset($_POST['submitReg'])){
    header('location: signup.php');
  
  } else { 
    include_once 'vista/formLogin.php';  
  }
  
?>