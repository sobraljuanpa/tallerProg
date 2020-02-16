<?php

require_once 'datos.php';

$director = $_POST["directorName"];
$resume = $_POST["resume"];
$date = $_POST["date"];
$title = $_POST["title"];
$genre = $_POST["genre"];
$actors = $_POST["actors"];
$trailer = $_POST["trailerLink"];

addMovie($title, $genre, $resume, $director, $date, $trailer);

$actors = explode(", ", $actors);
foreach ($actors as $actor) {
    addCast($actor);
}

header('location:index.php');