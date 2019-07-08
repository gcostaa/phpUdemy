<?php

require_once ("vendor/autoload.php");

$app = new \Slim\Slim();
//URL a ser digitada -> http://localhost:83/php_udemy/exFramework/hello/name
$app->get('/hello/:name', function ($name) {
    echo "Hello, " . $name;
});
$app->run();