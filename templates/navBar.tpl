<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">Guia de cine</a>
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
        {php}
          session_start();
          if (isset($_SESSION["loggedUser"])) {   
            $user = $_SESSION["loggedUser"];
            if ($user["role"] == "admin"){
              echo('<li class="nav-item"><a class="nav-link" href="addMoviePage.php">Agregar película</a></li>');
              echo('<li class="nav-item"><a class="nav-link" href="approveComments.php">Aprobar comentarios</a></li>');
            }
          }
        {/php}
      </ul>
    </div>
    {php}
      if (isset($_SESSION["loggedUser"])) {   
        echo('<a href="doLogout.php"><button type="button" class="btn btn-danger" style="margin-left: 10px;">Log out</button></a>');
      } else {
        echo('<a href="registerPage.php"><button type="button" class="btn btn-secondary" style="margin-left: 10px;">Registro</button></a>');
        echo('<a href="loginPage.php"><button type="button" class="btn btn-primary" style="margin-left: 10px;">Iniciar sesión</button></a>');
      }
    {/php}
</nav>