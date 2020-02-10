<!--CREATE TABLE IF NOT EXISTS `peliculas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `id_genero` int(11) NOT NULL,
  `fecha_lanzamiento` date NOT NULL,
  `resumen` varchar(500) NOT NULL,
  `director` varchar(255) NOT NULL,
  `youtube_trailer` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) 
-->

<?php

function getPeliculas() {
    $pelicula = array(
        array("id" => 1, "titulo" => "No te metas con Zohan","id_genero"=>"1",
            "fecha_lanzamiento"=>"05/12/2020",
            "resumen"=>"Pelicula muy divertida de accion y comedia",
            "director"=>"Juan Pablo",
            "youtube_trailer"=>"https://www.youtube.com/embed/tgbNymZ7vqY"),
        array("id" => 2, "titulo" => "Cars","id_genero"=>"2",
            "fecha_lanzamiento"=>"07/12/2020",
            "resumen"=>"Pelicula de dibujitos de autos re piolas",
            "director"=>"Federico",
            "youtube_trailer"=>"https://www.youtube.com/embed/tgbNymZ7vqY"),
        array("id" => 3, "titulo" => "Scary movie","id_genero"=>"3",
            "fecha_lanzamiento"=>"07/12/2020",
            "resumen"=>"Da mucho miedo",
            "director"=>"Javier",
            "youtube_trailer"=>"https://www.youtube.com/embed/tgbNymZ7vqY")
    );
    return $pelicula;
}

function getPeliculaPorId($id){
    foreach (getPeliculas() as $pelicula){
        if($pelicula["id"]== $id) {
            return $pelicula;
        }
    }
    
    return NULL;
}