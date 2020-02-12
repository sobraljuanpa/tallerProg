<!DOCTYPE html>
<?php 
    require_once 'datos.php';
    ini_set('display_errors', 1);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BDPI</title>
    <link rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap.min.css"/>
    <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
    <script src="bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
    <style>
    .bs-example{
        margin: 20px;        
    }
    </style>
</head>
<body>
    {include file="navBar.tpl"}
    Hola {$title}.
</body>
</html>