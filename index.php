<!DOCTYPE html>
<?php 
    require_once 'datos.php';
    ini_set('display_errors', 1);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BDPI</title>
    <link rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap.min.css"/>
    <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
    <script src="bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
    <style>
    .bs-example{
        margin: 20px;        
    }
    </style>
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
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="agregarComentario.php">Agregar comentario</a>
        </li>
        <?php
          session_start();
          if (isset($_SESSION["loggedUser"])) {   
            $user = $_SESSION["loggedUser"];
            if ($user["role"] == "admin"){
              echo('<li class="nav-item"><a class="nav-link" href="addMoviePage.php">Agregar película</a></li>');
              echo('<li class="nav-item"><a class="nav-link" href="approveComments.php">Aprobar comentarios</a></li>');
            }
          }
        ?>
      </ul>
    </div>
    <?php
      if (isset($_SESSION["loggedUser"])) {   
        echo('<a href="doLogout.php"><button type="button" class="btn btn-danger" style="margin-left: 10px;">Log out</button></a>');
      } else {
        echo('<a href="registerPage.php"><button type="button" class="btn btn-secondary" style="margin-left: 10px;">Registro</button></a>');
        echo('<a href="loginPage.php"><button type="button" class="btn btn-primary" style="margin-left: 10px;">Iniciar sesión</button></a>');
      }
    ?>
  </nav>
  <?php
    if (isset($_SESSION["loggedUser"])) {
      $user = $_SESSION["loggedUser"];   
      echo('<h1>Hola ' . $user["name"] . '</h1>');
    }
  ?>
    <p> </p>
    <!--De cada película se debe presentar el póster (una imagen asociada),
    el título, el género al que pertenece y su puntuación si es que tiene-->
    
   <div class="bs-example">
    <div class="container">
        <!--<div class="row">-->
            <div class="card-deck">
                <?php
            foreach (getPeliculas() as $pelicula) {
                echo('<div class="card" style="width:100">
                      <div w-75 mx-auto>
                      <img id="1" src="4838218.jpg" class="card-img-top">
                      </div>
                      <div class="card-body">');
                echo('<h5 class="card-title">'.$pelicula["titulo"].'</h5>');
                echo('<p class="card-text">'.$pelicula["id_genero"].'</p>');//Cambiarlo
                echo('<p class="card-text"><b>Puntuacion:</b>5/5</p>');//Cambiarlo
                echo('<a href="pelicula.php?id='.$pelicula["id"].'" type="button"> Mas informacion </a>');
                echo ('</div>');
                echo ('</div>');
            }
            ?>
        </div>
    </div>
</div>
</body>
</html>