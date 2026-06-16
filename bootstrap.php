<?php

declare(strict_types=1);
require __DIR__ . "/vendor/autoload.php"; // автоматически генерить автоподключение

$config = require __DIR__ . '/config.php';

use Core\App;
use Core\Database;

App::bind('config', $config);
App::bind('database', new Database($config['database']));