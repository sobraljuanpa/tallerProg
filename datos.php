<?php

require_once 'libs/Smarty.class.php';
require_once 'class.Conexion.BD.php';


function abrirConexion() {
    $cn = new ConexionBD("mysql", "localhost", "BDPI", "root", "root");
    $cn->conectar();
    return $cn;
}

function login($mail, $password) {
    $cn = abrirConexion();
    $cn->consulta('SELECT * FROM usuarios WHERE email = :email', array(
        array("email", $mail, 'string')
    ));

    $filas = $cn->restantesRegistros();
    foreach ($filas as $fila) {
        if(md5($password) == $fila["password"]) {
            return array(
                "id" => $fila["id"],
                "es_admin" => $fila["es_administrador"],
                "alias" => $fila["alias"]
            );
        }
    }

    return NULL;
}

function mailAvailable($mail) {
    $cn = abrirConexion();
    $cn->consulta('SELECT * FROM usuarios WHERE email = :email', array(
        array("email", $mail, 'string')
    ));

    return $cn->cantidadRegistros() == 0;
}

function createUser($mail, $alias, $password) {
    $cn = abrirConexion();
    $cn->consulta('INSERT INTO usuarios(email, alias, password, es_administrador) VALUES (:mail, :alias, :password, :es_admin)', array(
        array("mail", $mail, 'string'),
        array("alias", $alias, 'string'),
        array("password", md5($password), 'string'),
        array("es_admin", 0, 'int')
    ));
}

function addMovie($title, $genre, $date, $resume, $director, $trailer) {
    $cn = abrirConexion();
    $cn->consulta('INSERT INTO peliculas(titulo, id_genero, fecha_lanzamiento, resumen, director, youtube_trailer) VALUES (:title, :genre, :date, :resume, :director, :trailer)', array(
        array("title", $title, 'string'),
        array("genre", $genre, 'int'),
        array("date", $date, 'string'),
        array("resume", $resume, 'string'),
        array("director", $director, 'string'),
        array("trailer", $trailer, 'string')
    ));
}

function addCast($actor) {
    $cn = abrirConexion();
    $cn->consulta('SELECT * FROM peliculas ORDER BY titulo');
    $indicePelicula = $cn->cantidadRegistros();
    $cn->consulta('INSERT INTO elencos(id_pelicula, nombre) VALUES (:id_pelicula, :nombre)', array(
        array("id_pelicula", $indicePelicula, 'int'),
        array("nombre", $actor, 'string')
    ));
}

function addComment($id_movie, $comment, $stars, $id_user, $state){
    $cn = abrirConexion();
    $cn->consulta('INSERT INTO comentarios(id_pelicula, mensaje, puntuacion, id_usuario, estado) VALUES (:id_movie, :comment, :stars, :id_user, :state)', array(
        array("id_movie", $id_movie, 'int'),
        array("comment", $comment, 'string'),
        array("stars", $stars, 'float'),
        array("id_user", $id_user, 'int'),
        array("state", $state, 'string')
    ));
}

function getComentarios() {
    $cn = abrirConexion();
    $cn->consulta('SELECT * FROM comentarios ORDER BY puntuacion');
    return $cn->restantesRegistros();
}



function starsByMovie($id){
    $comments = getComentarios();
    $filterComments = array();
    $total=0;
    $count=0;
    foreach ($comments as $comment) {
        if($comment["id_pelicula"]==$id){
            $total += $comment["puntuacion"];
            $count++;
        }
    }
    if($total==0 || $count==0){
        return 0;
    }else{
        return $total/$count;
    }

}

function arrayOfStars(){
    $movies = getPeliculas();
    $array = array();
    foreach ($movies as $movie) {
        $array[$movie["id"]]= starsByMovie($movie["id"]);
    }
    return $array;
}

function filterCommentsByUser($id){
    $comments = getComentarios();
    $filterComments = array();
    foreach ($comments as $comment) {
        if($comment["id_usuario"]==$id){
            $filterComments[] = $comment["id_pelicula"];
        }
    }
    return $filterComments;
}

function getMoviesNotCommented($id) {
    $filterComments = filterCommentsByUser($id);
    $peliculas = getPeliculas();
    $items = array();
    foreach($peliculas as $pelicula){
        if(!in_array($pelicula["id"], $filterComments)){
            $items[] = $pelicula;
        }
    }
    return $items;
}

function getPeliculas() {
    $cn = abrirConexion();
    $cn->consulta('SELECT * FROM peliculas ORDER BY titulo');
    return $cn->restantesRegistros();
}

function getPeliculaPorId($id){
    foreach (getPeliculas() as $pelicula){
        if($pelicula["id"]== $id) {
            return $pelicula;
        }
    }

    return NULL;
}

function numberOfPages() {

    $size = 3;
    $cn = abrirConexion();
    $cn->consulta(
            'SELECT count(*) as total FROM peliculas ');
    $fila = $cn->siguienteRegistro();
    $total = $fila["total"];
    $pages = ceil($total / $size);
    if ($pages==0) { 
        $pages=1;
    };
    return $pages;
}

function getMoviesByPage($page) {
    $size = 6;
    $offset = ($page - 1) * $size;

    $cn = abrirConexion();
    $cn->consulta(
        'SELECT * FROM peliculas '
        . 'LIMIT :offset, :size', array(
        array("offset", $offset, 'int'),
        array("size", $size, 'int'),
        ));
    return $cn->restantesRegistros();
}

function getSmarty() {
    $mySmarty = new SmartyBC();
    $mySmarty->template_dir = 'templates';
    $mySmarty->compile_dir = 'templates_c';
    $mySmarty->config_dir = 'config';
    $mySmarty->cache_dir = 'cache';
    return $mySmarty;
}

function console_log( $data ){
    echo '<script>';
    echo 'console.log('. json_encode( $data ) .')';
    echo '</script>';
  }