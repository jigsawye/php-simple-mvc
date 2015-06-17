<?php

function view($name, $data)
{
    extract($data);
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
