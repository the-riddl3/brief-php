<?php
namespace Products\public_html;

use Products\core\Request;
use Products\core\App;
use Products\utils\Bag;
use Products\utils\Envy;

require_once __DIR__ . '/../vendor/autoload.php';

// load environment variables from .env.example
(new Envy(__DIR__ . '/../.env'))->load();

// initialize app with passed config
App::init([
    'database' => [
        'hostname' => getenv('HOSTNAME'),
        'name' => getenv('NAME'),
        'user' => getenv('USER'),
        'password' => getenv('PASS')
    ],
]);

// routes



