<?php
    $route = new Router;

    $route->get('/', ['PagesController', 'index']);

    $route->get('/contact', ['PagesController', 'contact']);
    $route->post('/contact', ['PagesController', 'onContact']);

    $route->get('/about', ['PagesController', 'about']);

    $route->get('/register', ['AuthController', 'register']);

    $route->get('/login', ['AuthController', 'login']);
