<?php
  
  session_start();
  
  if(!isset($_SESSION['Usuario'])){
    header('location: ../index.php');
  }
  include_once 'vista/view.php';


?>