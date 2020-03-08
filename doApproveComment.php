<?php 
  require_once 'datos.php';

  if(isset($_GET["id"])) {
      $commentId = $_GET["id"];
      
      approveComment($commentId);

      $movieId = getCommentMovieId($commentId);

      updateMovieScore($movieId);
  }

  header('location:index.php');