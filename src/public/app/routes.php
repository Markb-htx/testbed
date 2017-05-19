<?php
$app->group('', function () use ($app) {

    $controller = new app\controller\bookingController($app);

    $app->get('/bookings/create', $controller('booking'));
});
