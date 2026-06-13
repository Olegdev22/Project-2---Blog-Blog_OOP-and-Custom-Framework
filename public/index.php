<?php

declare(strict_types=1);

require __DIR__ . "/../vendor/autoload.php"; // автоматически генерить автоподключение

use Core\Router;

$router = new Router();
require_once __DIR__ . "/../routes.php";

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = $_SERVER['REQUEST_METHOD'];

echo $router->dispatch($uri, $method);