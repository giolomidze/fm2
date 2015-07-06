<?php
if(in_array($get[0], $lang)) {
    $first_segment = $get[1];
} else {
    $first_segment = $get[0];
    // var_dump(array_key_exists($get[0], $routes));
}

// var_dump($first_segment);
// print_r($get);
// var_dump($first_segment);

if(array_key_exists($first_segment, $routes)) {
    $controller_to_call = explode('@', $routes[$first_segment]);

    if(in_array($get[0], $lang)) {
        $first_segment = $get[1];
        $controller = new $controller_to_call[0]($get, $get[0]);
        unset($get[0]);
        unset($get[1]);
    } else {
        $first_segment = $get[0];
        $controller = new $controller_to_call[0]($get, 'en');
        // var_dump(array_key_exists($get[0], $routes));
        unset($get[0]);
    }

    if(method_exists($controller, $controller_to_call[1])) {
        $method = $controller_to_call[1];
        call_user_func_array(array($controller,  $method), $get);
    } else {
        echo 'no controller found';
    }
} else {
    echo 'route is not defined';
}