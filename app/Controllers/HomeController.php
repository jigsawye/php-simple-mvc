<?php

class HomeController
{
    public function index()
    {
        return require_once __DIR__ . '/../Views/form.php';
    }

    public function test()
    {
        return var_dump($_POST);
    }
}