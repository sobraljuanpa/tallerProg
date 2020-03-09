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
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div id="buscador">
            <ul class="navbar-nav mr-auto">
                <li>
                    <label><b>Ingresa tu busqueda</b></label>
                </li>
                <li>
                    <input style="margin-left: 10px" type="text" class="form-control" id="texto"/>
                </li>
                <li style="margin-left: 10px">
                    <select class="custom-select" id="category">
                        <option value="">Filtrar por categoria</option>
                        <option value="1">Acción</option>
                        <option value="2">Aventuras</option>
                        <option value="3">Comedia</option>
                        <option value="4">Drama</option>
                        <option value="5">Musicales</option>
                        <option value="6">Terror</option>
                        <option value="7">Ciencia Ficción</option>
                        <option value="8">Suspenso</option>
                        <option value="9">Infantiles</option>        
                    </select>
                </li>
                <li style="margin-left: 10px">
                    <input type="button"  class="btn btn-primary" value="Buscar" id="buscar" />
                </li>
            </ul>
            
        </div>
    </nav>
    <div id="movies">
           
    </div>
</body>
</html>