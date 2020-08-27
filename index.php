<?php
$token = explode('/', rtrim($_SERVER['REQUEST_URI'], '/'));
$controllerName = ucfirst($token[1]);
$controller = new $controllerName;
?>