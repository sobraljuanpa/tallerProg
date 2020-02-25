<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BDPI</title>
    <link rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap.min.css"/>
    <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
    <script src="bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
    .bs-example{
        margin: 20px;        
    }
    </style>
    <script>  
      function checkFields(form) {

        comment = form.comment.value; 
        if (comment == ''){
            alert ("Debe ingresar una descripción");
            return false;
        } 

        return true;
      } 
    </script>
</head>
<body>
    {include file="navBar.tpl"}
    <p></p>
    <div class="container ">
    <div class="card text-white bg-dark">
      <div class="card-body">
        <form onSubmit="return checkFields(this)"action="doAddComment.php" method="POST">
          <input name="user" value="{$user.id}" style="visibility:hidden">
          <div class="form-group">
            <label>Película</label>
            <select class="custom-select d-block w-100" name="movie" required>
                <option value="">Seleccione una película</option>
                {foreach from=$peliculas item=pelicula}
                    <option value="{$pelicula.id}">{$pelicula.titulo}</option>
                {/foreach}
            </select>
          </div>
          <div class="form-group">
            <label>Cantidad de estrellas</label>
            <select class="custom-select d-block w-100" name="stars" required>
                <option value="1.0">1.00</option>
                <option value="2.0">2.00</option>
                <option value="3.0">3.00</option>
                <option value="4.0">4.00</option>
                <option value="5.0">5.00</option>
            </select>
          </div>
          <div class="form-group">
            <label>Comentario</label>
            <input name="comment" type="text" class="form-control" placeholder="Muy buena pelicula">
          </div>
          <button type="submit" class="btn btn-primary">Dar de alta</button>
        </form>
        <br>
      </div>
    </div>
  </div>
</body>
</html>