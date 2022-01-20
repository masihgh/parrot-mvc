<?php
/*
* Route Web Here
*/
namespace Core;
use Core\Interfaces\View;
$router->setNamespace('\App\Controllers');


$router->get('/', function() {
	
	View::renderTemplate("index.html", ['dirs' => __DIR__]);
});

$router->get('/index', function () {
	View::renderTemplate("index.html", ['name' => 'ali']);
});

$router->mount('/wc', function () use ($router) {
	$router->get('/products', 'Wc@Products');
	$router->get('/product/(\d+)', 'Wc@Product');
	$router->get('/all', 'Wc@all');





});


$router->get('/users/(\d+)/(\d+)', 'Home@showProfile');
$router->get('/cars/(\d+)', 'Home@showProfile');






$router->set404(function () {
	//header('HTTP/1.1 404 Not Found');
	View::renderTemplate("app/404.html", ['name' => 'ali']);
});
?>