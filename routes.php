<?php

// Routes Configuration

$routes = [
    'home_page' => 'Controller@index|GET',
    'test_page' => 'TestController@test|GET',
    'test_page2' => 'TestController@update|POST',
    'test2' => 'TestController@update|POST',
    'logout' => 'TestController@logout|GET',
];