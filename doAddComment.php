<?php

require_once 'datos.php';

    $id_movie = $_POST["movie"];
    $stars = $_POST["stars"];
    $comment = $_POST["comment"];
    $id_user = $_POST["user"];
    $state = "PENDIENTE";

    console_log($id_movie);
    console_log($stars);
    console_log($comment);
    console_log($id_user);
    console_log($state);

addComment($id_movie, $comment, $stars, $id_user, $state);

header('location:index.php');