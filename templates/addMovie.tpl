<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BDPI - Alta de película</title>
    <link rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap.min.css"/>
    <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
    <script src="bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
    <script>  
      function checkFields(form) {

        title = form.title.value;  
        if (title == ''){
            alert ("Debe ingresar un título");
            return false;
        } 

        genero = form.genre.value;
        else if (genre == ''){
          alert ("Debe seleccionar un género"); 
          return false;
        } 

        directorName = form.directorName.value;
        else if (directorName == ''){
          alert ("Debe ingresar un director"); 
          return false;
        }

        fechaLanzamiento = form.date.value;
        else if (fechaLanzamiento == ''){
          alert ("Debe ingresar una fecha de lanzamiento"); 
          return false;
        }

        actors = form.actors.value;
        else if (actors == ''){
          alert ("Debe ingresar al menos un actor principal"); 
          return false;
        }
        
        return true;
      } 
    </script>
</head>
<body>
  {include file="navBar.tpl"}
  <div class="container">
    <div class="card text-white bg-secondary">
      <div class="card-body">
        <form onSubmit="return checkFields(this)" action="doAddMovie.php" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label>Título</label>
            <input name="title" type="text" class="form-control" placeholder="Bastardos sin gloria">
          </div>
          <div class="form-group">
            <label>Género</label><br>
            <input type="radio" name="genre" value="1"> Acción<br>
            <input type="radio" name="genre" value="2"> Aventuras<br>
            <input type="radio" name="genre" value="3"> Comedia<br>
            <input type="radio" name="genre" value="4"> Drama<br>
            <input type="radio" name="genre" value="5"> Musicales<br>
            <input type="radio" name="genre" value="6"> Terror<br>
            <input type="radio" name="genre" value="7"> Ciencia Ficción<br>
            <input type="radio" name="genre" value="8"> Suspenso<br>
            <input type="radio" name="genre" value="9"> Infantiles<br>
          </div>
          {* <div class="form-group">
            <label>Link al poster</label>
            <input name="posterLink" type="text" class="form-control" placeholder="https://a.b">
          </div> *}
          <div class="form-group">
            <label>Nombre del director</label>
            <input name="directorName" type="text" class="form-control" placeholder="Quentin Tarantino">
          </div>
          <div class="form-group">
            <label>Resumen</label>
            <input name="resume" type="text" class="form-control" placeholder="Cuenta la historia de un grupo de soldados estadounidenses....">
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
          <div class="form-group">
            <label>Poster de la pelicula</label>
            <input type="file" name="image"/>
          </div>
          <button type="submit" class="btn btn-primary">Dar de alta</button>
        </form>
        <br>
        {php}
          if(isset($_GET["err"])) {
            echo("<label>Por favor llene todos los campos.</label>");
          }
        {/php}
      </div>
    </div>
  </div>
</body>
</html>