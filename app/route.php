<?php
    $router = new Router;

    $router->get('/home', function () {
        echo 'This is Home page!';
    });
