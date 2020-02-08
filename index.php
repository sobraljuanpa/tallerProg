<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BDPI</title>
    <link rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap.min.css"/>
    <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
    <script src="bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Guia de cine</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Agregar comentario</a>
        </li>
      </ul>
    </div>

    <button type="button" class="btn btn-secondary" style="margin-left: 10px;">Registro</button>
    <a href="loginPage.php"><button type="button" class="btn btn-primary" style="margin-left: 10px;">Iniciar sesión</button></a>
    <a href="doLogout.php"><button type="button" class="btn btn-danger" style="margin-left: 10px;">Log out</button></a>

    </nav>
    <?php
    session_start();
    if (isset($_SESSION["loggedUser"])) {
      $user = $_SESSION["loggedUser"];   
      echo('<h1>Hola ' . $user["name"] . '</h1>');
    }
    ?>
</body>
</html>