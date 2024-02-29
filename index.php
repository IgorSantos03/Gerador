<?php

require __DIR__ . "/vendor/autoload.php";
require __DIR__ . "/src/config.php";

use CoffeeCode\Router\Router;


$router = new Router(ROOT);
$router->namespace("Klinf\Template\controller");


$router->get("/", "HomeController:home");
$router->get("/contato", "HomeController:contato");


$router->group("ooops");
$router->get("/{errcode}","HomeController:error");

$router->dispatch();
