<!DOCTYPE html>
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
    <div class="bs-example">
    <div class="container">
        <div class="card-deck">
            {foreach from=$comments item=comentario}
                {if $comentario.estado == "PENDIENTE"}
                    <div class="card bg-dark text-white">
                        <div class="card-body">
                            {$comentario.mensaje}
                            <a href="doRejectComment.php?id={$comentario.id}">
                                <button type="button" class="btn btn-danger" style="margin-left: 10px; float:right">Rechazar</button>
                            </a>
                            <a href="doApproveComment.php?id={$comentario.id}">
                                <button type="button" class="btn btn-primary" style="margin-left: 10px; float:right">Aprobar</button>
                            </a>
                        </div>
                    </div>
                {/if}
            {/foreach}
        </div>
    </div>
</body>
</html>