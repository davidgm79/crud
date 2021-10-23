<?php

$nombreInsert = $_POST['nombrePost'];
$precioInsert = $_POST['precioPost'];
$fechaInsert = $_POST['fechaPost'];

if(isset($_POST['insertarPost'])){
  $producto->insertar($nombreInsert, $precioInsert, 
                      $fechaInsert);
}


?>