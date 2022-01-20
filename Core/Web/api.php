<?php
/*
* Route Web Here
*/
$router->mount('/api', function() use ($router) {

    // will result in '/movies/'
    $router->get('/', function() {
		$js = [
			'main'=>['status'=>'online'],
			'methods'=>['status'=>'online'],
		];
		$js = json_encode($js,true);
        print_r($js);
    });

    // will result in '/movies/id'
    $router->get('movie/(\d+)', function($id) {
		$js = [
			'movie'=>['id'=>htmlentities($id)],
		];
		$js = json_encode($js,true);
        print_r($js);
    });

});
?>