<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap.min.css"/>
    <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
    <script src="bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
    </nav>
      <p> </p>
      <!--CARDS-->
      <div class="card mb-3 w-75 mx-auto">
        <div w-75 mx-auto>
            <iframe id="1.video" style="visibility:hidden" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
            <img id="1" src="4838218.jpg" class="card-img-top w-25 mx-auto">
        </div>
        <div class="card-body">
          <h5 class="card-title">No te metas con Zohan</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text"><b>Fecha de lanszamiento:</b> 01/03/2020</p> 
          <p class="card-text"><b>Descripcion:</b> This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text"><b>Director:</b> Juan Pablo Sobral</p>
          <p class="card-text"><b>Actores:</b> Rodrigo Bertolotti, Juan Perez, Tu Vieja</p>
          <button id="1.boton" type="button" class="btn btn-outline-danger mx-auto" onclick="mostrarVideo()">Ver video</button>
          <!----<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>-->
        </div>
      </div>
</body>
</html>

<script>
    function mostrarVideo(){
        document.getElementById('1').style.visibility="hidden";
        var video = document.getElementById('1.video');
        video.style.visibility="visible";
        video.width="420";
        video.height="315";
        document.getElementById('1.boton').innerHTML="Ver poster";
    }
</script>