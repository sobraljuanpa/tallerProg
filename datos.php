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

function addMovie($title, $genre, $date, $resume, $director, $trailer, $extension) {
    $cn = abrirConexion();
    $cn->consulta('INSERT INTO peliculas(titulo, id_genero, fecha_lanzamiento, resumen, director, youtube_trailer, extension) VALUES (:title, :genre, :date, :resume, :director, :trailer, :extension)', array(
        array("title", $title, 'string'),
        array("genre", $genre, 'int'),
        array("date", $date, 'string'),
        array("resume", $resume, 'string'),
        array("director", $director, 'string'),
        array("trailer", $trailer, 'string'),
        array("extension", $extension, 'string')
    ));
}

function getLastMovieId() {
    $cn = abrirConexion();
    $cn->consulta('SELECT * FROM peliculas');
    return $cn->cantidadRegistros();
}

function addCast($actor, $movieId) {
    $cn = abrirConexion();
    $cn->consulta('INSERT INTO elencos(id_pelicula, nombre) VALUES (:id_pelicula, :nombre)', array(
        array("id_pelicula", $movieId, 'int'),
        array("nombre", $actor, 'string')
    ));
}

function getComentarios() {
    $cn = abrirConexion();
    $cn->consulta('SELECT * FROM comentarios ORDER BY puntuacion');
    return $cn->restantesRegistros();
}

function getCommentById($id) {
    foreach (getComentarios() as $comentario){
        if($comentario["id"]== $id) {
            return $comentario;
        }
    }
    
    return NULL;
}

function approveComment($id) {
    $cn = abrirConexion();
    $cn->consulta('UPDATE comentarios SET estado = "APROBADO" WHERE id = :id', array(
        array("id", $id, 'int')
    ));
}

function rejectComment($id) {
    $cn = abrirConexion();
    $cn->consulta('UPDATE comentarios SET estado = "RECHAZADO" WHERE id = :id', array(
        array("id", $id, 'int')
    ));
}

function getMovieRatings($movieId) {
    $ratings = array();

    foreach (getComentarios() as $comentario){
        if($comentario["id_pelicula"] == $movieId) {
            $ratings[] = $comentario["puntuacion"];
        }
    }
    
    return array_sum($ratings)/count($ratings);
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

function getSmarty() {
    $mySmarty = new SmartyBC();
    $mySmarty->template_dir = 'templates';
    $mySmarty->compile_dir = 'templates_c';
    $mySmarty->config_dir = 'config';
    $mySmarty->cache_dir = 'cache';
    return $mySmarty;
}