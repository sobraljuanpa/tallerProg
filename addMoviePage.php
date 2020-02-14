<?php

require_once "datos.php";
ini_set('display_errors', 1);

$mySmarty = getSmarty();

session_start();
if (isset($_SESSION["loggedUser"])) {
    $user = $_SESSION["loggedUser"];
    $mySmarty->assign("user", $user);
}

$mySmarty->display('addMovie.tpl');