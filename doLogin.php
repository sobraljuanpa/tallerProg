<?php

function login($email, $password) {
    if($email == "admin@admin.admin" && $password== "admin"){
        return array(
            "role" => "admin",
            "name" => "Test Admin User"
        );
    }
    
    return NULL;
}

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