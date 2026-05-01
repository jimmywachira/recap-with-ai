<?php

use Core\Container;
use Core\Database;
use Core\App;

$container = new Container();

$container->bind('core/database', function () {
    $config = require base_path('config.php');
    return new Database($config['database']);
});

App::setContainer($container);
