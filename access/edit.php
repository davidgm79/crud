<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Organizador de tareas</title>
  <link rel="icon" href="Icono/calendario.png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="styles/estilos.css">

</head>

<body>
  
  <nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="/crud">Organizador de tareas</a>
  </nav>

  <div class="container">
    
    <div class="row pt-5">
      <div class="col-md-4">
        <div class="card">
          
          <div class="card-header">
            <h4>Editar tarea</h4>
          </div>
          <?php
            
            include_once 'modelo/editar_modelo.php';
            $id= $_GET['id'];
            $user= $_SESSION['Usuario'];
            $task= new Task();
            $task->update($id);
            $rows= $task->select($id);
            
            if(!empty($rows)){
              foreach($rows as $row){
          ?>
          <form action="" method="post" class="card-body">
            <div class="form-group">
              <input type="text" name="titlePostEdit" 
              placeholder="Titulo de la tarea" class="form-control"
              value='<?php echo $row['TITLE'];?>'>
            </div>
            <div class="form-group">
              <input type="textarea" name="descPostEdit" row="2" 
              placeholder="Descripcion de la tarea" class="form-control"
              value='<?php echo $row['DESCRIPTION'];?>'>
            </div>
            <input type="submit" value="Guardar" name='updateBtn'
            class="btn btn-success btn-block">
          </form>
          <?php }  } ?>
        </div>
      </div>
    </div>
  </div>

</body>
</html>