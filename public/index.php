<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Slim\Factory\AppFactory;
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;
use DI\Container;
use Slim\Middleware\MethodOverrideMiddleware;


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
//     $params = [
    // 'id' => $args['id'],
    // 'nickname' => 'user-' . $args['id']];
//     return $this->get('renderer')->render($response, 'users/show.phtml', $params);
// });






// Для Курсов

// $container = new Container();
// $app = AppFactory::createFromContainer($container);

// $container->set('renderer', function () {
//     return new \Slim\Views\PhpRenderer(__DIR__ . '/../templates');
// });

// $courses = [
// ['id' => 1, 'name' => 'Курс PHP'],
// ['id' => 2, 'name' => 'Курс JavaScript'],
// ];


// $app->get('/courses/{id}', function ($request, $response, array $args) use ($courses) {
//     $id = $args['id'];
//     $course = null;
//     foreach ($courses as $item) {
//         if ($item['id'] == $id) {
//             $course = $item;
//             break;
//         }
//     }

//     if ($course) {
//         $response->getBody()->write(json_encode($course, JSON_UNESCAPED_UNICODE));
//     } else {
//         $response->getBody()->write("Course with id {$id} not found");
//         return $response->withStatus(404);
//     }

//     return $response->withHeader('Content-Type', 'application/json');
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






//Поиск и вывод Users

// $container = new Container();
// $container->set('renderer', function () {
//     return new \Slim\Views\PhpRenderer(__DIR__ . '/../templates');
// });

// $app = AppFactory::createFromContainer($container);
// $app->addErrorMiddleware(true, true, true);

// $users = [
//     ['id' => 1, 'firstName' => 'Олег', 'lastName' => 'Баулин', 'email' => 'oleg@example.com'],
//     ['id' => 2, 'firstName' => 'Илья', 'lastName' => 'Широков', 'email' => 'ilya@example.com'],
//     ['id' => 3, 'firstName' => 'Мария', 'lastName' => 'Петрова', 'email' => 'maria@example.com'],
//     ['id' => 4, 'firstName' => 'Анна', 'lastName' => 'Сидорова', 'email' => 'anna@example.com'],
//     ['id' => 5, 'firstName' => 'Алексей', 'lastName' => 'Иванов', 'email' => 'alexey@example.com'],
// ];

// $app->get('/', function ($request, $response) {
//     return $response->withStatus(302)->withHeader('Location', '/users');
// });

// $app->get('/users', function ($request, $response) use ($users) {
//     $params = [
//         'users' => $users
//     ];
//     return $this->get('renderer')->render($response, 'users/index.phtml', $params);
// });

// $app->get('/api/users', function ($request, $response) use ($users) {
//     $term = $request->getQueryParam('term', '');
//     $filteredUsers = array_filter($users, function ($user) use ($term) {
//         return str_starts_with(mb_strtolower($user['firstName']), mb_strtolower($term));
//     });

//     $result = [
//         'users' => array_values($filteredUsers)
//     ];

//     $response->getBody()->write(json_encode($result));
//     return $response->withHeader('Content-Type', 'application/json');
// });






// Регистрация пользователей

// $container = new Container();
// $container->set('renderer', function () {
//     return new \Slim\Views\PhpRenderer(__DIR__ . '/../templates');
// });

// $app = AppFactory::createFromContainer($container);
// $app->addErrorMiddleware(true, true, true);

// $app->get('/users/new', function ($request, $response) {
//     $params = [
//         'user' => ['nickname' => '', 'email' => ''],
//         'errors' => []
//     ];
//     return $this->get('renderer')->render($response, "users/new.phtml", $params);
// });

// $app->post('/users', function ($request, $response) {
//     $user = $request->getParsedBodyParam('user');
//     $errors = [];
  
//     if (empty($user['nickname'])) {
//         $errors['nickname'] = 'Nickname is required';
//     }
    
//     if (empty($user['email'])) {
//         $errors['email'] = 'Email is required';
//     } elseif (!preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.(ru|com)$/', $user['email'])) {
//         $errors['email'] = 'Invalid email format';
//     }
    
//     if (empty($errors)) {
//         $user['id'] = uniqid();
//         $filePath = 'data/users.json';
//         $users = json_decode(file_get_contents($filePath), true) ?? [];
//         $users[] = $user;
//         file_put_contents($filePath, json_encode($users));
//         return $response->withRedirect('/users', 302);
//     }

//     $params = [
//         'user' => $user,
//         'errors' => $errors
//     ];
//     return $this->get('renderer')->render($response, "users/new.phtml", $params);
// });

// $app->get('/users', function ($request, $response) {
//     $filePath = 'data/users.json';
//     $users = json_decode(file_get_contents($filePath), true) ?? [];
//     $params = ['users' => $users];
//     return $this->get('renderer')->render($response, "users/show.phtml", $params);
// });






// Вариант с использованием twig, именованные маршруты и поиск по id

// $container = new Container();
// $container->set('view', function() {
//     return Twig::create(__DIR__ . '/../templates');
// });


// AppFactory::setContainer($container);
// $app = AppFactory::create();
// $app->addErrorMiddleware(true, true, true);

// $app->add(TwigMiddleware::createFromContainer($app));


// $app->get('/users/new', function ($request, $response, $args) {
//     $params = [
//         'user' => ['nickname' => '', 'email' => ''],
//         'errors' => []
//     ];
//     return $this->get('view')->render($response, "users/new.twig", $params);
// })->setName('new_user');


// $app->get('/users', function ($request, $response, $args) use ($app) {
//     $filePath = 'data/users.json';
//     $users = json_decode(file_get_contents($filePath), true) ?? [];
//     $createUrl = $app->getRouteCollector()->getRouteParser()->urlFor('new_user');
//     $params = [
//         'users' => $users, 
//         'createUrl' => $createUrl
//     ];
//     return $this->get('view')->render($response, "users/show.twig", $params);
// })->setName('list_users');


// $app->post('/users', function ($request, $response, $args) {
//     $user = $request->getParsedBodyParam('user');
//     $errors = [];
    
//     if (empty($user['nickname'])) {
//         $errors['nickname'] = 'Nickname is required';
//     }
    
//     if (empty($user['email'])) {
//         $errors['email'] = 'Email is required';
//     } elseif (!preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.(ru|com)$/', $user['email'])) {
//         $errors['email'] = 'Invalid email format';
//     }
    
//     if (empty($errors)) {
//         $user['id'] = uniqid();
//         $filePath = 'data/users.json';
//         $users = json_decode(file_get_contents($filePath), true) ?? [];
//         $users[] = $user;
//         $jsonData = json_encode($users, JSON_UNESCAPED_UNICODE);
//         file_put_contents($filePath, $jsonData);
//         return $response->withRedirect('/users', 302);
//     }

//     $params = [
//         'user' => $user,
//         'errors' => $errors
//     ];
//     return $this->get('view')->render($response, "users/new.twig", $params);
// })->setName('create_user');


// $app->get('/users/{id}', function ($request, $response, $args) {
//     $id = $args['id'];
//     $filePath = 'data/users.json';
//     $users = json_decode(file_get_contents($filePath), true) ?? [];
    
//     $user = null;
//     foreach ($users as $currentUser) {
//         if ($currentUser['id'] == $id) {
//             $user = $currentUser;
//             break;
//         }
//     }

//     if ($user === null) {
//         $response->getBody()->write('User not found');
//         return $response->withStatus(404);
//     }

//     return $response->withJson($user, 200, JSON_UNESCAPED_UNICODE);
// })->setName('show_user');






// Добавление Flash сообщения при регистрации

// session_start();

// $container = new Container();
// $container->set('view', function() {
//     return Twig::create(__DIR__ . '/../templates');
// });
// $container->set('flash', function () {
//     return new \Slim\Flash\Messages();
// });

// AppFactory::setContainer($container);
// $app = AppFactory::create();
// $app->add(TwigMiddleware::createFromContainer($app));

// $app->get('/users/new', function ($request, $response) {
//     $params = [
//         'user' => ['nickname' => '', 'email' => ''],
//         'errors' => []
//     ];
//     return $this->get('view')->render($response, "users/new.twig", $params);
// })->setName('new_user');

// $app->get('/users', function ($request, $response) use ($app) {
//     $filePath = 'data/users.json';
//     $users = json_decode(file_get_contents($filePath), true) ?? [];
//     $createUrl = $app->getRouteCollector()->getRouteParser()->urlFor('new_user');
//     $flashMessages = $app->getContainer()->get('flash')->getMessages();

//     $params = [
//         'users' => $users,
//         'createUrl' => $createUrl,
//         'flash' => $flashMessages
//     ];

//     return $app->getContainer()->get('view')->render($response, "users/show.twig", $params);
// })->setName('list_users');

// $app->post('/users', function ($request, $response) {
//     $user = $request->getParsedBodyParam('user');
//     $errors = [];
    
//     if (empty($user['nickname'])) {
//         $errors['nickname'] = 'Nickname is required';
//     }
    
//     if (empty($user['email'])) {
//         $errors['email'] = 'Email is required';
//     } elseif (!preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.(ru|com)$/', $user['email'])) {
//         $errors['email'] = 'Invalid email format';
//     }
    
//     if (empty($errors)) {
//         $user['id'] = uniqid();
//         $filePath = 'data/users.json';
//         $users = json_decode(file_get_contents($filePath), true) ?? [];
//         $users[] = $user;
//         $jsonData = json_encode($users, JSON_UNESCAPED_UNICODE);
//         file_put_contents($filePath, $jsonData);
//         $this->get('flash')->addMessage('success', 'Все заебись!');
//         return $response->withRedirect('/users', 302);
//     }

//     $params = [
//         'user' => $user,
//         'errors' => $errors
//     ];
//     return $this->get('view')->render($response, "users/new.twig", $params);
// })->setName('create_user');







// Данные пользователей берутся из файла по id

// Создание и настройка контейнера и приложения
// $container = new Container();
// $container->set('renderer', function () {
//     return new \Slim\Views\PhpRenderer(__DIR__ . '/../templates');
// });

// $app = AppFactory::createFromContainer($container);
// $app->add(MethodOverrideMiddleware::class);
// $app->addErrorMiddleware(true, true, true);


// // Обработчик отображения формы для создания нового пользователя
// $app->get('/users/new', function ($request, $response) {
//     $params = [
//         'user' => ['nickname' => '', 'email' => ''],
//         'errors' => []
//     ];
//     return $this->get('renderer')->render($response, "users/new.phtml", $params);
// })->setName('users.new');


// // Обработчик создания нового пользователя
// $app->post('/users', function ($request, $response) {
//     $user = $request->getParsedBodyParam('user');
//     $errors = [];

//     if (empty($user['nickname'])) {
//         $errors['nickname'] = 'Nickname is required';
//     }

//     if (empty($user['email'])) {
//         $errors['email'] = 'Email is required';
//     } elseif (!preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.(ru|com)$/', $user['email'])) {
//         $errors['email'] = 'Invalid email format';
//     }

//     if (empty($errors)) {
//         $user['id'] = uniqid();
//         $filePath = 'data/users.json';
//         $users = json_decode(file_get_contents($filePath), true) ?? [];
//         $users[] = $user;
//         file_put_contents($filePath, json_encode($users));
//         return $response->withRedirect('/users', 302);
//     }

//     $params = [
//         'user' => $user,
//         'errors' => $errors
//     ];
//     return $this->get('renderer')->render($response, "users/new.phtml", $params);
// })->setName('users.create');


// // Обработчик для отображения списка всех пользователей
// $app->get('/users', function ($request, $response) use ($app) {
//     $filePath = 'data/users.json';
//     $users = json_decode(file_get_contents($filePath), true) ?? [];
//     $routeParser = $app->getRouteCollector()->getRouteParser();
//     $createUrl = $routeParser->urlFor('users.new');
//     $params = [
//         'users' => $users, 
//         'createUrl' => $createUrl, 
//         'routeParser' => $routeParser
//     ];
//     return $this->get('renderer')->render($response, "users/show.phtml", $params);
// })->setName('users.index');


// // Обработчик для отображения формы редактирования пользователя
// $app->get('/users/{id}/edit', function ($request, $response, array $args) {
//     $id = $args['id'];
//     $filePath = 'data/users.json';
//     $users = json_decode(file_get_contents($filePath), true) ?? [];

//     $user = array_filter($users, function ($user) use ($id) {
//         return $user['id'] == $id;
//     });

//     if (empty($user)) {
//         return $response->write('User not found')->withStatus(404);
//     }

//     $user = array_shift($user);
//     $params = ['user' => $user, 'errors' => []];
//     return $this->get('renderer')->render($response, "users/edit.phtml", $params);
// })->setName('users.edit');



// // Обработчик для отображения профиля конкретного пользователя
// $app->get('/users/{id}', function ($request, $response, array $args) use ($app) {
//     $id = $args['id'];
//     $filePath = 'data/users.json';
//     $users = json_decode(file_get_contents($filePath), true) ?? [];

//     $user = array_filter($users, function ($user) use ($id) {
//         return $user['id'] == $id;
//     });

//     if (empty($user)) {
//         return $response->write('User not found')->withStatus(404);
//     }

//     $user = array_shift($user);
//     $routeParser = $app->getRouteCollector()->getRouteParser();
//     $params = ['user' => $user, 'routeParser' => $routeParser];
//     return $this->get('renderer')->render($response, "users/show_user.phtml", $params);
// })->setName('users.show');


// // Обработчик для обновления данных пользователя
// $app->patch('/users/{id}', function ($request, $response, array $args) {
//     $id = $args['id'];
//     $filePath = 'data/users.json';
//     $users = json_decode(file_get_contents($filePath), true) ?? [];
//     $userKey = array_search($id, array_column($users, 'id'));

//     if ($userKey === false) {
//         return $response->write('User not found')->withStatus(404);
//     }

//     $userData = $request->getParsedBodyParam('user');
//     $errors = [];

//     if (empty($userData['nickname'])) {
//         $errors['nickname'] = 'Nickname is required';
//     }

//     if (empty($userData['email'])) {
//         $errors['email'] = 'Email is required';
//     } elseif (!preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.(ru|com)$/', $userData['email'])) {
//         $errors['email'] = 'Invalid email format';
//     }

//     if (count($errors) === 0) {
//         $users[$userKey]['nickname'] = $userData['nickname'];
//         $users[$userKey]['email'] = $userData['email'];

//         file_put_contents($filePath, json_encode($users));
//         return $response->withRedirect('/users', 302);
//     }

//     $params = [
//         'user' => $userData,
//         'errors' => $errors
//     ];
//     return $this->get('renderer')->render($response, "users/edit.phtml", $params);
// })->setName('users.update');


// // Обработчик отображения страницы подтверждения удаления пользователя
// $app->get('/users/{id}/delete', function ($request, $response, array $args) use ($app) {
//     $id = $args['id'];
//     $filePath = 'data/users.json';
//     $users = json_decode(file_get_contents($filePath), true) ?? [];

//     $user = array_filter($users, function ($user) use ($id) {
//         return $user['id'] == $id;
//     });

//     if (empty($user)) {
//         return $response->write('User not found')->withStatus(404);
//     }

//     $user = array_shift($user);
//     $routeParser = $app->getRouteCollector()->getRouteParser();
//     $params = ['user' => $user, 'routeParser' => $routeParser];
//     return $this->get('renderer')->render($response, "users/delete.phtml", $params);
// })->setName('users.delete');



// // Обработчик удаления пользователя
// $app->delete('/users/{id}', function ($request, $response, array $args) {
//     $id = $args['id'];
//     $filePath = 'data/users.json';
//     $users = json_decode(file_get_contents($filePath), true) ?? [];
//     $userKey = array_search($id, array_column($users, 'id'));

//     if ($userKey === false) {
//         return $response->write('User not found')->withStatus(404);
//     }

//     unset($users[$userKey]);
//     file_put_contents($filePath, json_encode($users));

//     return $response->withRedirect('/users', 302);
// })->setName('users.delete');






//Установка Cookie

// $container = new Container();
// $container->set('renderer', function () {
//     return new \Slim\Views\PhpRenderer(__DIR__ . '/../templates');
// });

// $app = AppFactory::createFromContainer($container);
// $app->add(MethodOverrideMiddleware::class);
// $app->addErrorMiddleware(true, true, true);

// $app->get('/users/new', function ($request, $response) {
//     $params = [
//         'user' => ['nickname' => '', 'email' => ''],
//         'errors' => []
//     ];
//     return $this->get('renderer')->render($response, "users/new.phtml", $params);
// })->setName('users.new');

// $app->post('/users', function ($request, $response) {
//     $user = $request->getParsedBodyParam('user');
//     $users = json_decode($request->getCookieParam('users', json_encode([])), true);
//     $user['id'] = uniqid();
//     $users[] = $user;
//     $encodedUsers = json_encode($users);
//     return $response->withHeader('Set-Cookie', "users={$encodedUsers}")
//         ->withRedirect('/users');
// })->setName('users.create');

// $app->get('/users', function ($request, $response) use ($app) {
//     $users = json_decode($request->getCookieParam('users', json_encode([])), true);
//     $routeParser = $app->getRouteCollector()->getRouteParser();
//     $createUrl = $routeParser->urlFor('users.new');
//     $params = [
//         'users' => $users,
//         'createUrl' => $createUrl,
//         'routeParser' => $routeParser
//     ];
//     return $this->get('renderer')->render($response, "users/show.phtml", $params);
// })->setName('users.show');






// Счетчик корзины товаров

// $container = new Container();
// $container->set('renderer', function () {
//     return new \Slim\Views\PhpRenderer(__DIR__ . '/../templates');
// });

// AppFactory::setContainer($container);
// $app = AppFactory::create();
// $app->add(MethodOverrideMiddleware::class);
// $app->addErrorMiddleware(true, true, true);

// $app->get('/', function ($request, $response) {
//     $cart = json_decode($request->getCookieParam('cart', json_encode([])), true);
//     $params = [
//         'cart' => $cart
//     ];
//     return $this->get('renderer')->render($response, 'index.phtml', $params);
// });


// $app->post('/cart-items', function ($request, $response) {
//     $cart = json_decode($request->getCookieParam('cart', json_encode([])), true);
//     $item = $request->getParsedBodyParam('item');
//     $itemId = $item['id'];

//     if (isset($cart[$itemId])) {
//         $cart[$itemId]['count'] += 1;
//     } else {
//         $cart[$itemId] = ['name' => $item['name'], 'count' => 1];
//     }

//     $encodedCart = json_encode($cart);
//     return $response->withHeader('Set-Cookie', "cart={$encodedCart}")
//         ->withRedirect('/');
// });

// $app->delete('/cart-items', function ($request, $response) {
//     $encodedCart = json_encode([]);
//     return $response->withHeader('Set-Cookie', "cart={$encodedCart}")
//         ->withRedirect('/');
// });








// Сессии

// session_start();

// $container = new Container();
// $container->set('renderer', function () {
//     return new \Slim\Views\PhpRenderer(__DIR__ . '/../templates');
// });

// AppFactory::setContainer($container);
// $app = AppFactory::create();
// $app->add(MethodOverrideMiddleware::class);
// $app->addErrorMiddleware(true, true, true);

// $app->get('/', function ($request, $response) {
//     $params = [
//         'email' => $_SESSION['email'] ?? null
//     ];
//     return $this->get('renderer')->render($response, 'users/index.phtml', $params);
// })->setName('home');

// $app->post('/login', function ($request, $response) {
//     $_SESSION['email'] = $request->getParsedBodyParam('email');
//     return $response->withRedirect('/');
// })->setName('login');

// $app->post('/logout', function ($request, $response) {
//     unset($_SESSION['email']);
//     return $response->withRedirect('/');
// })->setName('logout');






// Еще одна сессия, хранение Имени пользователя и пароля

// session_start();

// $container = new Container();
// $container->set('renderer', function () {
//     return new \Slim\Views\PhpRenderer(__DIR__ . '/../templates');
// });
// $container->set('flash', function () {
//     return new \Slim\Flash\Messages();
// });

// AppFactory::setContainer($container);
// $app = AppFactory::create();
// $app->addErrorMiddleware(true, true, true);
// $app->add(MethodOverrideMiddleware::class);

// $users = [
//     ['name' => 'admin', 'passwordDigest' => hash('sha256', 'secret')],
//     ['name' => 'mike', 'passwordDigest' => hash('sha256', 'superpass')],
//     ['name' => 'kate', 'passwordDigest' => hash('sha256', 'strongpass')]
// ];

// $app->get('/', function ($request, $response) use ($container) {
//     $flash = $container->get('flash')->getMessages();
//     $params = [
//         'flash' => $flash,
//         'currentUser' => $_SESSION['user'] ?? null
//     ];
//     return $container->get('renderer')->render($response, 'users/index.phtml', $params);
// })->setName('home');

// $app->post('/session', function ($request, $response) use ($users, $container) {
//     $user = $request->getParsedBodyParam('user');
//     $name = $user['name'];
//     $password = $user['password'];

//     foreach ($users as $user) {
//         if ($user['name'] === $name && $user['passwordDigest'] === hash('sha256', $password)) {
//             $_SESSION['user'] = $name;
//             return $response->withRedirect('/');
//         }
//     }
//     $container->get('flash')->addMessage('error', 'Wrong password or name');
//     return $response->withRedirect('/');
// })->setName('login');

// $app->delete('/session', function ($request, $response) {
//     unset($_SESSION['user']);
//     return $response->withRedirect('/');
// })->setName('logout');


$app->run(); 
