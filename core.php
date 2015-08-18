<?php
$first_segment = $get[0];

// Check if the requested URI is within the routes

if (array_key_exists($first_segment, $routes)) {
    $controller_to_call = explode('@', $routes[$first_segment]);

    $first_segment = $get[0];
    $controller = new $controller_to_call[0]($get);
    unset($get[0]);

    $method_to_call = explode('|', $controller_to_call[1]);
    $request_method = $method_to_call[1]; // Get Method

    if (method_exists($controller, $method_to_call[0])) {
        $method = $method_to_call[0]; // Get Controller
        if($request_method === $_SERVER['REQUEST_METHOD']) {
            call_user_func_array(array($controller, $method), $get);
        } else {
            $message['status'] = 'bad request';
            echo json_encode($message);
            return http_response_code(400);
        }
    } else {
        $message['status'] = 'controller wasn\'t controller found';
        echo json_encode($message);
        return http_response_code(404);
    }
} else {
        $message['status'] = 'page wasn\'t found';
        echo json_encode($message);
        return http_response_code(404);
}