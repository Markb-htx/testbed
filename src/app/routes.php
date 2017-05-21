<?php

//route for webserver2 route
$app->get('/bookings/create', ['\App\Controllers\BookingController','booking']);

//route to create just the token
$app->get('/bookings/token', ['\App\Controllers\TokenController','token']);

//route for the soap methods
$app->get('/bookings/soap', ['\App\Controllers\SoapController','soap']);
