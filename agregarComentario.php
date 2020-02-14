<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BDPI - Registro</title>
    <link rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap.min.css"/>
    <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
    <script src="bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
    <script src="bootstrap-4.4.1-dist/js/bootstrap.bundle.js"></script>
</head>
<body>
  <div class="container">
    <div class="card text-white bg-secondary">
      <div class="card-body">
        <form onSubmit="return checkFields(this)"action="doRegisterMovie.php" method="POST">
          <div class="form-group">
            <label>Película</label>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Esto es una prueba de un texto largo</button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                  <button class="dropdown-item" type="button">Action</button>
                  <button class="dropdown-item" type="button">Another action</button>
                  <button class="dropdown-item" type="button">Something else here</button>
                </div>
            </div>
          </div>
          <div class="form-group">
            <label>Cantidad de estrellas</label>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">1</button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                  <button class="dropdown-item" type="button">Action</button>
                  <button class="dropdown-item" type="button">Another action</button>
                  <button class="dropdown-item" type="button">Something else here</button>
                </div>
            </div>
          </div>
          <div class="form-group">
            <label>Comentario</label>
            <input name="actors" type="text" class="form-control" placeholder="Muy buena pelicula">
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