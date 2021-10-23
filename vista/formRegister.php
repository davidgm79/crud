<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Formulario de registro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  </head>
  <body>
    <div class='container'>
    <div class='row justify-content-center m-5'>
      <div class='card col-4 py-3'>
        <h3 class='m-2'>Registrar</h3><hr>
        <form action="" method="post" class='p-3'>
      
          <label>Usuario :
            <input class="form-control" type="text" name="usuarioReg">
          </label><br>
      
          <label>Contraseña :
            <input type="password" class="form-control mb-3" 
                   name="passwordReg">
          </label><br>
      
          <input type="submit" class="btn btn-success" 
                 name="submitBtnReg" value="SignUp">
          <input type="submit" class="btn btn-outline-success" 
                 name="submitLogin" value="Login">
        </form>
      </div>
    </div>
    </div>
    <?php
    include_once 'modelo/register.php';
    $var = new Register();
    $var->validarForm();
    
    ?>
  </body>
</html>
