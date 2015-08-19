<?php
require_once 'constants.php';

function __autoload($class)
{
    $folders = ['system', 'controllers'];
    foreach ($folders as $folder) {
        $filepath = getcwd().DIRECTORY_SEPARATOR.$folder.DIRECTORY_SEPARATOR.$class.'.php';
        if(file_exists($filepath)) {
            require_once $filepath;
        }
    }
}

if (isset($_GET['uri'])) {
    $get = $_GET['uri'];
} else {
    $get = 'home_page';
}

$get = explode('/', $get);

require_once 'routes.php';
require_once 'system/core.php';
