<?php

  include_once 'vista/formRegister.php';
  
  if(isset($_POST['submitLogin'])){
    header('location: index.php');
  }
?>