<?php
define('CLASS_DIR', '');

set_include_path(getcwd() . PATH_SEPARATOR . CLASS_DIR);

spl_autoload_extensions('.php');

spl_autoload_register();

if (isset($_GET['uri'])) {
    $get = $_GET['uri'];
} else {
    $get = 'home_page';
}

$get = explode('/', $get);

require_once 'constants.php';
require_once 'routes.php';
require_once 'core.php';
