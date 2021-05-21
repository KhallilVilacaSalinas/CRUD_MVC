<?php
use core\Router;
use src\controllers\HomeController;

$router = new Router();


$router->get('/', 'HomeController@index');
