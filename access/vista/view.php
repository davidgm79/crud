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
    <a class="navbar-brand" href="#">Tasks App</a>
    <div class="form-inline">
      <a href='../cerrarSesion.php'>
        <button class="btn btn-light mr-2 my-2 my-sm-0" 
         type="submit">Cerrar sesion</button>
      </a>
    </div>    
  </nav>

  <div class="container">
    
    <div class="row justify-content-center pt-4">
      <div class="col-4">
        <div class="card">
          
          <div class="card-header">
            <h4>Agregar tarea</h4>
          </div>

          <form action="" method="post" class="card-body">
            <div class="form-group">
              <input type="text" name="titlePost" 
              placeholder="Titulo de la tarea" class="form-control">
            </div>
            <div class="form-group">
              <input type="" name="descPost" step="0.01" 
              placeholder="Descripcion de la tarea" class="form-control">
            </div>
            <input type="submit" value="Guardar" 
            class="btn btn-primary btn-block" name='insertarBtn'>
          </form>

        </div><br>
      </div>
      <div class="col-8">
        <?php
          
          include_once 'modelo/modelo.php';
          $task = new Task();
          $rows = $task->mostrar();
          $task->insertar();
          if(!empty($rows)){
            foreach($rows as $row){
        ?>
        <div class="card text-center mb-4">
          <div class="card-body">
            <strong>Titulo</strong>:
            <?php echo $row['TITLE']; ?> -
            <strong>Description</strong>: 
            <?php echo $row['DESCRIPTION']; ?><br> 

            <a href="delete.php?id=<?php echo $row['ID']; ?>"
            class="btn btn-danger ml-3" name="delete">Eliminar</a>
            <a href="edit.php?id=<?php echo $row['ID']; ?>"
            class="btn btn-success" name="edit">Actualizar</a>
          </div>
        </div>
        <?php
            }
          }
        ?>
      </div>
    </div>
  </div>
</body>
</html>