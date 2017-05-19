<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';


$configuration = [
    'settings' => [
        'displayErrorDetails' => true,
    ],
];

$configuration['logger'] = function($c) {
    $logger = new \Monolog\Logger('my_logger');
    $file_handler = new \Monolog\Handler\StreamHandler("app/logs/app.log");
    $logger->pushHandler($file_handler);
    return $logger;
};

$c = new \Slim\Container($configuration);
$app = new \Slim\App($c);

$container[MyController::class] = function ($c) {
    return new MyController();

};

$c = $app->getContainer();
$c['notAllowedHandler'] = function ($c) {
    return function ($request, $response, $exception) use ($c) {
        return $c['response']->withStatus(500)
            ->withHeader('Content-Type', 'text/html')
            ->write('Something went wrong!');
    };
};

$app->group('', function () use ($app) {

    $controller = new app\controller\bookingController($app);

    $app->get('/bookings/create', $controller('booking'));
});

$app->run();
