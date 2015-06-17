<?php
    $route = new Router;

    $route->get('/', ['PagesController', 'index']);

    $route->get('/contact', ['PagesController', 'contact']);
    $route->post('/contact', ['PagesController', 'onContact']);

    $route->get('/about', ['PagesController', 'about']);

    $route->get('/register', ['AuthController', 'register']);

    $route->get('/login', ['AuthController', 'login']);

    $route->get('/posts', ['PostsController', 'index']);
    $route->get('/posts/show', ['PostsController', 'show']);
    $route->get('/posts/create', ['PostsController', 'create']);
    $route->post('/posts/store', ['PostsController', 'store']);
    $route->get('/posts/edit', ['PostsController', 'edit']);
    $route->post('/posts/update', ['PostsController', 'update']);
    $route->post('/posts/delete', ['PostsController', 'delete']);
