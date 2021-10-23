<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Inicio de sesion</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  </head>
  <body>
    <div class='container'>
    <div class='row justify-content-center m-5'>
      <div class='card col-4 py-3'>
        <h3 class='m-2'>Login</h3><hr>
        <form action="" method="post" class='p-3'>
      
          <label>Usuario :
            <input class="form-control" type="text" name="usuario">
          </label><br>
      
          <label>Password :
            <input type="password" class="form-control mb-3" 
                   name="password">
          </label><br>
      
          <input type="submit" class="btn btn-info" 
                name="submitBtnLogin" value="Login">
                
          <input type='submit' name='submitReg' value='SignUp'
                class='btn btn-outline-info'>
          
        </form>
        
      </div>
    </div>
    </div>
    <?php
    include_once 'modelo/login.php';
    $var = new Login();
    $var->validarForm();
    
    ?>
  </body>
</html>
