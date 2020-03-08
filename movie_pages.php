<?php

require_once 'datos.php';
//ini_set('display_errors', 1);

# crear instancia de smarty
$mySmarty = getSmarty();

$pag = 1;
if (isset($_GET["pag"])) {
    $pag = $_GET["pag"];
}

# setear variables
$mySmarty->assign("pagina", $pag);
$mySmarty->assign("paginas", numberOfPages());
$mySmarty->assign("peliculas", getMoviesByPage($pag, $_GET['busqueda']));

# mostrar el template
$mySmarty->display('pagedMovies.tpl');