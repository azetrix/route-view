<?php

const _ROUTES_ = [
    '/' => 'index.txt',
    '/hello' => 'index.txt',

    '{PAGE_NOT_FOUND}' => 'index.txt'
];

// ================================================================= //

require_once('./src/classes/autoload.php');

$url_path = Core\Commons::url_path();
$router = new Core\Router(_ROUTES_);
$router->fetch($url_path);