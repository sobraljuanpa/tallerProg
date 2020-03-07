<div class="bs-example">
        <div class="container">
            <!--<div class="row">-->
                <div class="card-deck">
                {foreach from=$peliculas item=pelicula}
                    {include file="movieCard.tpl" pelicula=$pelicula}
                {/foreach}
        </div>
</div>
<div id="paginacion">
    <button id="anterior" {if ($pagina<=1)}disabled{/if}>Anterior</button>
    Pagina {$pagina} de {$paginas}
    <button id="siguiente" {if ($pagina>=$paginas)}disabled{/if}>Siguiente</button>
</div>
