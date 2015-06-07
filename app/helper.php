<?php

function view($name)
{
    return require __DIR__ . '/Views/' . $name . '.php';
}

function redirect($uri = '/')
{
    return header('Location:' . URL . $uri);
}

function model($model)
{
    require_once __DIR__ . '/Model/' . $model . '.php';
    return new $model;
}
