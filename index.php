<?php
require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;

$router = new Router(ROOT);

$router->namespace("Source\Controllers")->group(null);

$router->get("/", "Web:home", "web.home");
$router->get("/importar", "Web:importar", "web.importar");
$router->get("/transacao/lojas", "Web:loja", "web.loja");
$router->post("/create", "Web:store", "web.store");

$router->dispatch();

