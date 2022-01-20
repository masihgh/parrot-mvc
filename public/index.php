<?php
ini_set('display_errors', '1');
$DIR = dirname(__DIR__);
require_once $DIR . '\vendor\autoload.php';
require_once($DIR.'\Core\Application.php');
use \Bramus\Router\Router as Router;



// Create Router instance
$router = new Router();
require_once($DIR.'\Core\Web\routers.php');
require_once($DIR.'\Core\Web\api.php');
$router->run();






//dd($router);


