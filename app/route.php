<?php
    $router = new Router;

    $router->get('/home', ['HomeController', 'index']);

    $router->post('/test', ['HomeController', 'test']);
