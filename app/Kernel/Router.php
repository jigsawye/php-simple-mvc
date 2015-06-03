<?php

class Router
{
    private $request_params;
    private $request_uri;
    private $request_method;

    public function __construct()
    {
        // example http://localhost/index.php/home
        // $_SERVER['REQUEST_URI'] 會是 /index.php/home
        // /index.php 不是我們要的，所以把它切除
        $uri = str_replace('/index.php', '', $_SERVER['REQUEST_URI']);

        $this->request_uri = $uri;
        // GET or POST
        $this->request_method = $_SERVER['REQUEST_METHOD'];
    }

    public function get($uri, $action)
    {
        if (($this->request_method == 'GET') && ($this->request_uri == $uri)) {
            return $action();
        }
    }
}
