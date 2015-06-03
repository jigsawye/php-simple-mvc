<?php
    $router = new Router;

    $router->get('/home', function () {
        require_once __DIR__ . '/../app/Views/form.php';
    });

    $router->post('/test', function () {
        var_dump($_POST);
    });
