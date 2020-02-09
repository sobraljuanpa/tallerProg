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
          alert ("Las contraseñas no pueden ser diferentes");
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
        <form onSubmit="return checkFields(this)"action="doRegisterMovie.php" method="POST">
          <div class="form-group">
            <label>Título</label>
            <input name="title" type="text" class="form-control" placeholder="Bastardos sin gloria">
          </div>
          <div class="form-group">
            <label>Género</label><br>
            <input type="radio" name="genre" value="Acción"> Acción<br>
            <input type="radio" name="genre" value="Aventuras"> Aventuras<br>
            <input type="radio" name="genre" value="Comedia"> Comedia<br>
            <input type="radio" name="genre" value="Drama"> Drama<br>
            <input type="radio" name="genre" value="Musicales"> Musicales<br>
            <input type="radio" name="genre" value="Terror"> Terror<br>
            <input type="radio" name="genre" value="Aventuras"> Ciencia Ficción<br>
            <input type="radio" name="genre" value="Comedia"> Suspenso<br>
            <input type="radio" name="genre" value="Drama"> Infantiles<br>
          </div>
          <div class="form-group">
            <label>Link al poster</label>
            <input name="posterLink" type="text" class="form-control" placeholder="https://a.b">
          </div>
          <div class="form-group">
            <label>Nombre del director</label>
            <input name="directorName" type="text" class="form-control" placeholder="Quentin Tarantino">
          </div>
          <div class="form-group">
            <label>Fecha de lanzamiento</label>
            <input name="date" type="date" class="form-control">
          </div>
          <div class="form-group">
            <label>Actores principales, nombre separado por coma</label>
            <input name="actors" type="text" class="form-control" placeholder="Brad Pitt, Eli Roth">
          </div>
          <div class="form-group">
            <label>Link al trailer</label>
            <input name="trailerLink" type="text" class="form-control">
          </div>
          <button type="submit" class="btn btn-primary">Dar de alta</button>
        </form>
        <br>
        <?php
          if(isset($_GET["err"])) {
            echo("<label>Por favor llene todos los campos.</label>");
          }
        ?>
      </div>
    </div>
  </div>
</body>
</html>