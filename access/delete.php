<?php

  include_once 'modelo/modelo.php';
  $id= $_GET['id'];
  $task = new Task();
  $task->eliminar($id);
  
  header('location: index.php');
  
?>