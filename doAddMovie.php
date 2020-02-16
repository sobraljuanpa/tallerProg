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

header('location:index.php');