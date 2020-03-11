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
#ACA AGREGUE EL GET AMOUNT EN LAS ULTIMAS DOS ASIGNACIONES
$mySmarty->assign("pagina", $pag);
$mySmarty->assign("paginas", numberOfPages($_GET['busqueda'],$_GET['category'],$_GET['amount']));
$mySmarty->assign("peliculas", getMoviesByPage($pag, $_GET['busqueda'],$_GET['category'],$_GET['amount']));

# mostrar el template
$mySmarty->display('pagedMovies.tpl');