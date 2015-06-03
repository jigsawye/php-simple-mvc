<?php
    $router = new Router;

    $router->get('/', ['PagesController', 'index']);

    $router->get('/contact', ['PagesController', 'contact']);

    $router->get('/about', ['PagesController', 'about']);
