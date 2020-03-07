<div class="bs-example">
        <div class="container">
            <!--<div class="row">-->
                {assign var=contador value=$contador+1}
                    <div class="card-deck">
                    {foreach from=$peliculas item=pelicula}
                        {if $contador < 3}
                        {include file="movieCard.tpl" pelicula=$pelicula}
                        {assign var=contador value=$contador+1}
                        {else if $contador == 3}
                            {include file="movieCard.tpl" pelicula=$pelicula}
                            {assign var=contador value=$contador+1}
                            </div>
                            <div class="card-deck">
                        {else}
                            {include file="movieCard.tpl" pelicula=$pelicula}
                            {assign var=contador value=$contador+1}
                        {/if}
                    {/foreach}
                    </div>
                
        </div>
</div>
<div id="paginacion">
    <button id="anterior" {if ($pagina<=1)}disabled{/if}>Anterior</button>
    Pagina {$pagina} de {$paginas}
    <button id="siguiente" {if ($pagina>=$paginas)}disabled{/if}>Siguiente</button>
</div>
