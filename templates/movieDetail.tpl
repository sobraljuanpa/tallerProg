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
    {include file="navBar.tpl"}
      <p> </p>
           
        {if (isset($pelicula))}
            <div class="card mb-3 w-75 mx-auto">
                    <div w-75 mx-auto>
                    <iframe style="visibility:hidden" src="{$pelicula.youtube_trailer}"></iframe>
                    <img src="img/{$pelicula.id}.{$pelicula.extension}" class="card-img-top w-25 mx-auto">
                    </div>
            <div class="card-body">
                <h5 class="card-title">{$pelicula.titulo}</h5>
                <p class="card-text">{$pelicula.resumen}</p>
                <p class="card-text"><b>Director:</b>{$pelicula.director}</p>
                {else}
                    <h1>No existe dicha película</h1>
                
        {/if}
              
        </div>
      </div>
</body>
</html>
