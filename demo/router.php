<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

// dd($uri);

// if ($uri === '/') {
//     require('controllers/index.php');
// } elseif ($uri === '/about') {
//     require('controllers/about.php');
// } elseif ($uri == '/contact') {
//     require('controllers/contact.php');
// }

$routes = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/contact' => 'controllers/contact.php'
];

function abort($code = 404)
{
    http_response_code($code);

    require("views/{$code}.php");

    die();
}

function routeToController($uri, $routes)
{

    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}

routeToController($uri, $routes);
