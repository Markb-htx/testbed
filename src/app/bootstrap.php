<?php

require '../vendor/autoload.php';

$app = new \Slim\App([
    'settings' => [
        'displayErrorDetails' => true,
    ]
]);

$container = $app->getContainer();

$container['BookingController'] = function (){
return new \App\controller\BookingController;
};

require 'routes.php';