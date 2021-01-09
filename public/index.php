<?php

// use app\controllers\Controller;
use app\Router;

require_once __DIR__.'/../vendor/autoload.php';

// $controller = new Controller;
$router = new Router;
$router->get('/', 'index');
$router->get('/personal', 'personal');
$router->get('/login', 'login');
$router->post('/login', 'login');
$router->get('/signup', 'signup');
$router->post('/signup', 'signup');
$router->get('/logout', 'logout');
// $router->get('/', []);
// $router->get('/', []);


$router->resolve();