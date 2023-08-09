<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Slim\Factory\AppFactory;

$app = AppFactory::create();
$app->addErrorMiddleware(true, true, true);

$app->get('/users', function ($request, $response) {
    $response->getBody()->write('GET /users');
    return $response;
});



$app->run();