<?php

require_once 'datos.php';

$user = $_SESSION["loggedUser"];
$id_movie = $_POST["movie"];
$stars = $_POST["stars"];
$comment = $_POST["comment"];
$id_user = $user.id;     

addComment($id_movie, $comment, $stars, $id_user);

header('location:index.php');