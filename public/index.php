<?php
require '../vendor/autoload.php';
use Slim\Factory\AppFactory;

echo 'test';

echo phpinfo();

$app = AppFactory::create();
$app->get('/hello', function ($request, $response, array $args) {
    echo "hello";
});

try {
    $app->run();
} catch (Exception $e) {

}

