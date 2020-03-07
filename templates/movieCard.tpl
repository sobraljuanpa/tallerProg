
<div class="card" style="width:100">
    <div w-75 mx-auto>
        <img src="img/{$pelicula.id}.{$pelicula.extension}" class="card-img-top" >
    </div>
    <div class="card-body">
        <h5 class="card-title">{$pelicula.titulo}</h5>
        <p class="card-text">{$pelicula.id_genero}</p>
        <p class="card-text"><b>Puntuacion:</b>5/5</p>
        <a href="pelicula.php?id={$pelicula.id}" type="button"> Mas informacion </a>
    </div>
</div>