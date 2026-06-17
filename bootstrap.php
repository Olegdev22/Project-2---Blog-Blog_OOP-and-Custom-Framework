<?php

declare(strict_types=1);
require __DIR__ . "/vendor/autoload.php"; // автоматически генерить автоподключение


use Core\App;
use Core\Database;
use Core\ErrorHandler;

// Testing Error Handling in CLI Scripts
set_exception_handler([ErrorHandler::class, 'handleException']);
set_error_handler([ErrorHandler::class, 'handleError']);
$config = require __DIR__ . '/config.php';

App::bind('config', $config);
App::bind('database', new Database($config['database']));