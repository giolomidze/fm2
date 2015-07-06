<?php
$lang = [
    'ka', 'en'
];

// Routes Configuration

$routes = [
    'home_page' => 'MainController@index',
    'products' => 'ProductController@products',
    'login' => 'UserController@login',
    'შესვლა' => 'UserController@login',
    'რეგისტრაცია' => 'UserController@sign_up',
    'sign_up' => 'UserController@sign_up',
    'პროდუქტები' => 'ProductController@products',
];