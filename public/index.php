<?php
require __DIR__ . '/../vendor/autoload.php';

use Framework\Router;
use Framework\Session;

Session::start();

require '../helpers.php';

// require basePath('Framework/Router.php');
// require basePath('Framework/Database.php');

// spl_autoload_register(function ($class) {
//   $path = basePath('Framework/' . $class . '.php');
//   if (file_exists($path)) {
//     require $path;
//   }
// });

// Instantiating the router class
$router = new Router();

// Get routes
$routes = require basePath('routes.php');

// Get current URI and HTTP method
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
// $method = $_SERVER['REQUEST_METHOD'];

// Route the request
$router->route($uri);
