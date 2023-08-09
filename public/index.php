<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Slim\Factory\AppFactory;

$companies = [1, 2, 5, 6, 8, 54, 76];


$app = AppFactory::create();
$app->addErrorMiddleware(true, true, true);

// $app->get('/companies', function ($request, $response) {
//     $response->getBody()->write('Hello World!');
//     return $response;
// });

$app->get('/companies', function ($request, $response) use ($companies) {
    $page = $request->getQueryParam('page', 1);
    $per = $request->getQueryParam('per', 5);

    $start = ($page - 1) * $per;
    $slicedCompanies = array_slice($companies, $start, $per);
    
    return $response->write(json_encode($slicedCompanies));
});



$app->run();