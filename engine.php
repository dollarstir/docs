<?php

require_once 'loader/autoloader.php';
$router = new Router([
    new Route(
        '/',
        function ($context) {
            return Viewer::view('main/main.php', $context);
        }
    ),

    new Route(
        '/installation',
        function ($context) {
            return Viewer::view('main/docs/9.x/installation.php', $context);
        }
    ),
]);
$router->launch();
