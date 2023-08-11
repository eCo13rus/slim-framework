<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Slim\Factory\AppFactory;
use DI\Container;

// Для Компаний

// $companies = [
//     'Apple Inc.',
//     'Microsoft Corporation',
//     'Amazon.com Inc.',
//     'Google LLC (Alphabet Inc.)',
//     'Facebook Inc. (Meta Platforms Inc.)',
//     'Tesla Inc.',
//     'IBM Corporation',
//     'Samsung Electronics Co. Ltd.',
//     'General Electric Company (GE)',
//     'Ford Motor Company'
// ];

// $app = AppFactory::create();
// $app->addErrorMiddleware(true, true, true);


// $app->get('/companies', function ($request, $response) use ($companies) {
//     $page = $request->getQueryParam('page', 1);
//     $per = $request->getQueryParam('per', 2);

//     $start = ($page - 1) * $per;
//     $slicedCompanies = array_slice($companies, $start, $per);
    
//     return $response->write(json_encode($slicedCompanies));
// });






// Для id и nickname

// $container = new Container();
// $container->set('renderer', function () {
//     return new \Slim\Views\PhpRenderer(__DIR__ . '/../templates');
// });
// $app = AppFactory::createFromContainer($container);
// $app->addErrorMiddleware(true, true, true);

// $app->get('/users/{id}', function ($request, $response, $args) {
//     $params = ['id' => $args['id'], 'nickname' => 'user-' . $args['id']];
//     return $this->get('renderer')->render($response, 'users/show.phtml', $params);
// });






// Для Курсов

// $container = new Container();
// $container->set('renderer', function () {
//     return new \Slim\Views\PhpRenderer(__DIR__ . '/../templates');
// });

// $courses = [
// ['id' => 1, 'name' => 'Курс PHP'],
// ['id' => 2, 'name' => 'Курс JavaScript'],
    
// ];

// $app = AppFactory::createFromContainer($container);
// $app->get('/courses/{id}', function ($request, $response, array $args) {
//     $id = $args['id'];
//     return $response->write("Courses id: {$id}");
// });

// $app->get('/courses', function ($request, $response) use ($courses) {
//     $params = [
//         'courses' => $courses
//     ];
//     return $this->get('renderer')->render($response, 'courses/index.phtml', $params);
// });





// Для пользователей и погоды

// $container = new Container();
// $container->set('renderer', function () {
//     return new \Slim\Views\PhpRenderer(__DIR__ . '/../templates');
// });

// $app = AppFactory::createFromContainer($container);
// $app->addErrorMiddleware(true, true, true);

// $app->get('/', function ($request, $response) {
//     return $this->get('renderer')->render($response, 'index.phtml');
// });

// $users = [
//     ['id' => 1, 'firstName' => 'Олег', 'lastName' => 'Баулин', 'email' => 'alice.johnson@example.com', 'city' => 'Саранск'],
//     ['id' => 2, 'firstName' => 'Илья', 'lastName' => 'Широков', 'email' => 'hannah.taylor@example.com', 'city' => 'Москва'],
//     ['id' => 3, 'firstName' => 'Charlie', 'lastName' => 'Brown', 'email' => 'charlie.brown@example.com', 'city' => 'Новосибирск'],
//     ['id' => 4, 'firstName' => 'David', 'lastName' => 'Lee', 'email' => 'david.lee@example.com', 'city' => 'Екатеринбург'],
//     ['id' => 5, 'firstName' => 'Emily', 'lastName' => 'Davis', 'email' => 'emily.davis@example.com', 'city' => 'Казань'],
//     ['id' => 6, 'firstName' => 'Frank', 'lastName' => 'Miller', 'email' => 'frank.miller@example.com', 'city' => 'Нижний Новгород'],
//     ['id' => 7, 'firstName' => 'Grace', 'lastName' => 'Wilson', 'email' => 'grace.wilson@example.com', 'city' => 'Самара'],
//     ['id' => 8, 'firstName' => 'Bob', 'lastName' => 'Smith', 'email' => 'bob.smith@example.com', 'city' => 'Санкт-Петербург'],
//     ['id' => 9, 'firstName' => 'Ivan', 'lastName' => 'Anderson', 'email' => 'ivan.anderson@example.com', 'city' => 'Владивосток'],
//     ['id' => 10, 'firstName' => 'Jack', 'lastName' => 'Thomas', 'email' => 'jack.thomas@example.com', 'city' => 'Киров'],
//     ['id' => 11, 'firstName' => 'Kate', 'lastName' => 'Jackson', 'email' => 'kate.jackson@example.com', 'city' => 'Сызрань'],
//     ['id' => 12, 'firstName' => 'Luke', 'lastName' => 'Harris', 'email' => 'luke.harris@example.com', 'city' => 'Кострома'],
//     ['id' => 13, 'firstName' => 'Megan', 'lastName' => 'Clark', 'email' => 'megan.clark@example.com', 'city' => 'Уссурийск'],
//     ['id' => 14, 'firstName' => 'Nathan', 'lastName' => 'Lewis', 'email' => 'nathan.lewis@example.com', 'city' => 'Саратов'],
//     ['id' => 15, 'firstName' => 'Olivia', 'lastName' => 'Walker', 'email' => 'olivia.walker@example.com', 'city' => 'Рязань'],
// ];

// function getTemperatureForCity($cityName) {
//     $apiKey = 'daba050dbf211828ed62d50ebd2cedad';
//     $apiUrl = "http://api.openweathermap.org/data/2.5/weather?q={$cityName}&appid={$apiKey}&units=metric";
//     $weatherData = file_get_contents($apiUrl);
//     $weatherArray = json_decode($weatherData, true);

//     if (isset($weatherArray['main']['temp'])) {
//         return $weatherArray['main']['temp'];
//     } else {
//         return "Не удалось получить температуру для города {$cityName}";
//     }
// }

// $app->get('/users', function ($request, $response) use ($users) {
//     $params = ['users' => $users];
//     return $this->get('renderer')->render($response, 'users/index.phtml', $params);
// });

// $app->get('/users/{id}', function ($request, $response, $args) use ($users) {
//     $id = (int) $args['id'];
//     $user = array_filter($users, function ($user) use ($id) {
//         return $user['id'] === $id;
//     });

//     if (empty($user)) {
//         return $response->withStatus(404)->write('User not found');
//     }

//     $user = reset($user);
//     $cityName = $user['city'] ?? null;
//     if ($cityName) {
//         $temperature = getTemperatureForCity($cityName);
//         $user['temperature'] = $temperature;
//     }

//     $params = ['user' => $user];
//     return $this->get('renderer')->render($response, 'users/show.phtml', $params);
// });

$app->run();
