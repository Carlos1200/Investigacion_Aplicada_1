<?php
require_once('./app.php');
use MVC\Router;
use Controller\UserController;

$router = new Router();
    $router->get('/',[UserController::class,'getUser']);

    $router->comprobarRutas();

?>