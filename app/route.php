<?php
    $router = new Router;

    $router->get('/home', function () {
        // 以下為不良示範，不要亂學
        echo '<form action="./index.php/test" method="post">';
        echo '<input type="text" name="test_value">';
        echo '<input type="submit">';
        echo '</form>';
    });

    $router->post('/test', function () {
        var_dump($_POST);
    });
