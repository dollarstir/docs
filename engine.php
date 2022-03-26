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
        '/home',
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

    new Route(
        '/newapp/{appname}',
        function ($context) {
            return Viewer::view('yolk_create.php', $context);
        }
    ),

    new Route(
        '/social',
        function ($context) {
            return Viewer::view('zip/social.zip', $context);
        }
    ),

    new Route(
        '/newuser',
        function ($context) {
            return Viewer::view('inituser.php', $context);
        }
    ),
]);
$router->launch();
