<?php

require_once 'datos.php';

$title = $_POST["title"];
$genre = $_POST["genre"];
$director = $_POST["directorName"];
$resume = $_POST["resume"];
$date = $_POST["date"];
$actors = $_POST["actors"];
$trailer = $_POST["trailerLink"];

addMovie($title, $genre, $date, $resume, $director, $trailer);

$actors = explode(", ", $actors);
foreach ($actors as $actor) {
    addCast($actor);
}

if($_FILES['image']['name'])
{
  $movieId = getMovieId();
  $imgExtension =  explode('.', $_FILES['image']['name'])[1];

  move_uploaded_file($_FILES['image']['tmp_name'], "/var/www/tallerProg/img/$movieId.$imgExtension");
}

header('location:index.php');