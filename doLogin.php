<?php

require_once 'datos.php';

$email = $_POST["email"];
$password = $_POST["password"];

$loggedUser = login($email, $password);

if (isset($loggedUser)) {
    session_start();
    $_SESSION["loggedUser"] = $loggedUser;
    header('location:index.php');
} else {
    header('location:loginPage.php?err=1');
}