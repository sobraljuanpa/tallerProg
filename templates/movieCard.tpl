
<div class="card" style="width:100">
    <div w-75 mx-auto>
        <img src="img/{$pelicula.id}.{$pelicula.extension}" class="card-img-top" >
    </div>
    <div class="card-body">
        <h5 class="card-title">{$pelicula.titulo}</h5>
        <p class="card-text"><b>Género: </b>
            {if $pelicula.id_genero eq 1}
                Acción
            {elseif $pelicula.id_genero eq 2}
                Aventuras
            {elseif $pelicula.id_genero eq 3}
                Comedia
            {elseif $pelicula.id_genero eq 4}
                Drama
            {elseif $pelicula.id_genero eq 5}
                Musicales
            {elseif $pelicula.id_genero eq 6}
                Terror
            {elseif $pelicula.id_genero eq 7}
                Ciencia Ficción
            {elseif $pelicula.id_genero eq 8}
                Suspenso
            {elseif $pelicula.id_genero eq 9}
                Infantiles
            {/if}
        </p>
        <p class="card-text"><b>
            Puntuacion:</b>
            {if $pelicula.puntuacion neq 0}
                {$pelicula.puntuacion}
            {else}
                Aún no hay comentarios sobre esta película.
            {/if} 
        </p>
        <a href="pelicula.php?id={$pelicula.id}" type="button"> Mas informacion </a>
    </div>
</div>