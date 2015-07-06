<?php
// Your custom class dir
define('CLASS_DIR', '');

// Add your class dir to include path
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);

// You can use this trick to make autoloader look for commonly used "My.class.php" type filenames
spl_autoload_extensions('.php');

// Use default autoload implementation
spl_autoload_register();

if(isset($_GET['uri'])) {
    $get = $_GET['uri'];
} else {
    $get = 'home_page';
}

$get = explode('/', $get);

require_once 'constants.php';
require_once 'routes.php';
require_once 'core.php';
