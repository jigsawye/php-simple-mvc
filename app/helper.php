<?php

function view($name)
{
    return require __DIR__ . '/Views/' . $name . '.php';
}
