<?php

require_once 'datos.php';
ini_set('display_errors', 1);

$mySmarty = getSmarty();

$mySmarty->assign("title", "JUan PAblo");

$mySmarty->display("pruebaSmarty.tpl");