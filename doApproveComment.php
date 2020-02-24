<?php 
  require_once 'datos.php';

  if(isset($_GET["id"])) {
      $commentId = $_GET["id"];
      $comment = getCommentById($commentId);
      
      approveComment($commentId);
  }

  header('location:index.php');