<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BDPI - Registro</title>
    <link rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap.min.css"/>
    <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
    <script src="bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
    <script>  
      function checkPasswords(form) {

        password1 = form.password1.value; 
        password2 = form.password2.value; 

        // Check if any password is empty 
        if (password1 == '' || password2 == ''){
            alert ("Las contraseñas no pueden estar vacias");
            return false;
        } 
              
        // Check if passwords match
        else if (password1 != password2){
          alert ("Las contraseñas ingresadas no son iguales"); 
          return false;
        } 

        // Check if password length is valid 
        else if (password1.length < 6){ 
            alert("Por favor ingrese una contraseña de al menos seis caracteres") 
            return false; 
        }

        return true;
      } 
    </script>
</head>
<body>
  <div class="container">
    <div class="card text-white bg-secondary">
      <div class="card-body">
        <form onSubmit="return checkPasswords(this)" action="doRegister.php" method="POST">
          <div class="form-group">
            <label>Email</label>
            <input name="email" type="email" class="form-control" placeholder="ejemplo@ejemplo.ej">
          </div>
          <div class="form-group">
            <label>Alias</label>
            <input name="alias" type="text" class="form-control" placeholder="Bruce Wayne">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input name="password1" type="password" class="form-control" placeholder="Password">
          </div>
          <div class="form-group">
            <label>Confirmar password</label>
            <input name="password2" type="password" class="form-control" placeholder="Password">
          </div>
          <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
        <br>
        <?php
          if(isset($_GET["err"])) {
            echo("<label>Ya hay un usuario registrado con ese email.</label>");
          }
        ?>
      </div>
    </div>
  </div>
</body>
</html>