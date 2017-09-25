<?php

/**FRONT CONTROLLER*/


// 1. general settings
ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();


// 2. includes systems files
define('ROOT', dirname(__FILE__));

require_once ROOT. '/components/Autoload.php';


// 4. Router call
$router = new Router();
$router->run();

