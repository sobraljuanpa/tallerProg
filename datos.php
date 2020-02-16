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

function getComentarios() {
    $cn = abrirConexion();
    $cn->consulta('SELECT * FROM comentarios ORDER BY puntuacion');
    return $cn->restantesRegistros();
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