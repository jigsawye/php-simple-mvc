<?php

function view($name)
{
    return require __DIR__ . '/Views/' . $name . '.php';
}

function redirect($uri = '/')
{
    return header('Location:' . URL . $uri);
}
