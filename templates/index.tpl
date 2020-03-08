<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BDPI</title>
    <link rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap.min.css"/>
    <!--<script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>-->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
    <script src="js/index.js"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
    .bs-example{
        margin: 20px;        
    }
    </style>
</head>
<body>
    {include file="navBar.tpl"}
    <div id="buscador">
            <label>Ingresa tu busqueda</label>
            <input type="text" id="texto"/>
            <input type="button" value="Buscar" id="buscar" />
    </div>
    <div id="movies">
           
    </div>
</body>
</html>