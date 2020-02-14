<?php

require_once 'libs/Smarty.class.php';

function getConexion() {
    $usuario = "root";
    $clave = "root";

    $cn = new PDO(
            'mysql:host=localhost;dbname=BDPI', $usuario, $clave);
    return $cn;
}

function getComentarios() {
    $comentarios = array(
        array(
            "id" => 1,
            "id_pelicula" => 1,
            "mensaje" => 'La peor terminator de toda la saga',
            "puntuacion" => 2.00,
            "id_usuario" => 2,
            "estado" => 'PENDIENTE'
        ),
        array(
            "id" => 2,
            "id_pelicula" => 2,
            "mensaje" => 'Muy entretenida, perfecta para niños en vacaciones',
            "puntuacion" => 5.00,
            "id_usuario" => 2,
            "estado" => 'APROBADO'
        ),
        array(
            "id" => 3,
            "id_pelicula" => 3,
            "mensaje" => 'No la vi, pero me dijeron que es muy buena',
            "puntuacion" => 4.00,
            "id_usuario" => 2,
            "estado" => 'RECHAZADO'
        )
    );

    return $comentarios;
}

// function getPeliculas() {
//     $pelicula = array(
//         array("id" => 1, "titulo" => "No te metas con Zohan","id_genero"=>"1",
//             "fecha_lanzamiento"=>"05/12/2020",
//             "resumen"=>"Pelicula muy divertida de accion y comedia",
//             "director"=>"Juan Pablo",
//             "youtube_trailer"=>"https://www.youtube.com/embed/tgbNymZ7vqY"),
//         array("id" => 2, "titulo" => "Cars","id_genero"=>"2",
//             "fecha_lanzamiento"=>"07/12/2020",
//             "resumen"=>"Pelicula de dibujitos de autos re piolas",
//             "director"=>"Federico",
//             "youtube_trailer"=>"https://www.youtube.com/embed/tgbNymZ7vqY"),
//         array("id" => 3, "titulo" => "Scary movie","id_genero"=>"3",
//             "fecha_lanzamiento"=>"07/12/2020",
//             "resumen"=>"Da mucho miedo",
//             "director"=>"Javier",
//             "youtube_trailer"=>"https://www.youtube.com/embed/tgbNymZ7vqY")
//     );
//     return $pelicula;
// }

function getPeliculas() {
    $cn = getConexion();

    $sql = "SELECT * FROM peliculas ORDER BY titulo";
    $resultado = $cn->query($sql);
    $peliculas = $resultado->fetchAll(PDO::FETCH_ASSOC);
    return $peliculas;
}

function getPeliculaPorId($id){
    foreach (getPeliculas() as $pelicula){
        if($pelicula["id"]== $id) {
            return $pelicula;
        }
    }
    
    return NULL;
}

function getSmarty() {
    $mySmarty = new SmartyBC();
    $mySmarty->template_dir = 'templates';
    $mySmarty->compile_dir = 'templates_c';
    $mySmarty->config_dir = 'config';
    $mySmarty->cache_dir = 'cache';
    return $mySmarty;
}

// <!--CREATE TABLE IF NOT EXISTS `peliculas` (
//     `id` int(11) NOT NULL AUTO_INCREMENT,
//     `titulo` varchar(255) NOT NULL,
//     `id_genero` int(11) NOT NULL,
//     `fecha_lanzamiento` date NOT NULL,
//     `resumen` varchar(500) NOT NULL,
//     `director` varchar(255) NOT NULL,
//     `youtube_trailer` varchar(255) NOT NULL,
//     PRIMARY KEY (`id`)
//   ) 
//   CREATE TABLE IF NOT EXISTS `comentarios` (
//     `id` int(11) NOT NULL AUTO_INCREMENT,
//     `id_pelicula` int(11) NOT NULL,
//     `mensaje` varchar(255) NOT NULL,
//     `puntuacion` float(18,2) NOT NULL,
//     `id_usuario` int(11) NOT NULL,
//     `estado` varchar(50) NOT NULL DEFAULT 'PENDIENTE',
//     PRIMARY KEY (`id`)
//   ) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;
//   --
//   -- Volcado de datos para la tabla `comentarios`
//   --
//   INSERT INTO `comentarios` (`id`, `id_pelicula`, `mensaje`, `puntuacion`, `id_usuario`, `estado`) VALUES
//   (1, 1, 'La peor terminator de toda la saga', 2.00, 2, 'PENDIENTE'),
//   (2, 2, 'Muy entretenida, perfecta para niños en vacaciones', 5.00, 2, 'APROBADO'),
//   (3, 3, 'No la vi, pero me dijeron que es muy buena', 4.00, 2, 'RECHAZADO');
//   -->