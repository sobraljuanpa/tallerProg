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