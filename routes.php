<?php
$lang = [
    'ka', 'en'
];

// Routes Configuration

$routes = [
    'home_page' => 'MainController@index',
    'products' => 'ProductController@products',
    'login' => 'UserController@login',
    'დარეგისტრირდი' => 'UserController@sign_up',
    'sign_up' => 'UserController@sign_up',
];