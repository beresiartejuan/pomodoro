<?php

$router->set404(function() {
    header('HTTP/1.1 404 Not Found');
});

$router->get('/', function(){
	echo Views::getIndex();
});

$router->get('/log', function(){
	Session::set('user_id', '12');
	Session::set('user_name', 'Juan Beresiarte');
});

$router->get('/exit', function(){
	Session::close();
});
