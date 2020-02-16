<?php

require_once 'datos.php';

$email = $_POST["email"];
$alias = $_POST["alias"];
$password = $_POST["password1"];

if (mailAvailable($email)) {
    createUser($email, $alias, $password);
    header('location:index.php');
} else {
    header('location:registerPage.php?err=1');
}