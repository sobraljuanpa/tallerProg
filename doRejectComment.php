<?php 
  require_once 'datos.php';

  if(isset($_GET["id"])) {
      $commentId = $_GET["id"];
      $comment = getCommentById($commentId);
      
      rejectComment($commentId);
      //refreshScore($comment["id_pelicula"]);
  }

  header('location:index.php');