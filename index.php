<?php

require "./vendor/autoload.php";

use CoffeeCode\Router\Router;


$router = new Router("localhost:8080");

/**
 * routes
 * The controller must be in the namespace Test\Controller
 * this produces routes for route, route/$id, route/{$id}/profile, etc.
 */
$router->namespace("App\Controllers");

$router->get("/", "HomeController:index");

$router->dispatch();
