<?php 
  require_once 'datos.php';
  ini_set('display_errors', 1);

  $mySmarty= getSmarty();
  session_start();

  if (isset($_SESSION["loggedUser"])) {
      $user = $_SESSION["loggedUser"];
      $mySmarty->assign("user", $user);
  }

  $peliId = 1;
  if(isset($_GET["id"])) {
      $peliId = $_GET["id"];
      $pelicula = getPeliculaPorId($peliId);
      $mySmarty->assign("pelicula",$pelicula);
  }

 

  $mySmarty->display('movieDetail.tpl');