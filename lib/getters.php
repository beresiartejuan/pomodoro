<?php

$app->set('controller', function($name) use ($app){
	require_once $app->get('config')['root'] . '/controllers/' . $name . 'Controller.php';
	$cl = $name . 'Controller';
	return new $cl;
});

$app->set('model', function($name) use ($app){
	require_once $app->get('config')['root'] . '/models/' . $name . 'Model.php';
	$cl = $name . 'Model';
	return new $cl;
});

$app->set('filedata', function(){

});