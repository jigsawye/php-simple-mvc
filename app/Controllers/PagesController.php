<?php

class PagesController
{
    public function index()
    {
        return require_once __DIR__ . '/../Views/index.php';
    }

    public function contact()
    {
        return require_once __DIR__ . '/../Views/contact.php';
    }

    public function about()
    {
        return require_once __DIR__ . '/../Views/about.php';
    }
}
