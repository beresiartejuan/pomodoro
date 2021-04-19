<?php

$app = require_once 'app.php';
session_start();

// Se configura el manejador de errores
$app->set('errorhandler', new \Whoops\Run);
$app->get('errorhandler')->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$app->get('errorhandler')->register();

// Seteo la config, el enrutador y el motor de plantillas
$app->set('name', 'Pomodoro');
$app->set('config', require_once 'config.php');
$app->set('router', new \Bramus\Router\Router());
$app->set('engine', new League\Plates\Engine($app->get('config')['root'] . '/views'));

// Mando a llamar a las funciones
$app->require($app->get('config')['root'] . '/lib', ['config']);
// Mando a llamar a los controladores
$app->require($app->get('config')['root'] . '/controllers', ['config', 'engine']);
// Mando a definir las rutas 
$app->require($app->get('config')['root'] . '/routes', ['router', 'engine']);

// Cuando la app este lista para lanzanse
$app->on('ready', function() use ($app){

	// Se revisa si se requiere la base de datos verdadera
	//$app->set('database', require_once $app->get('config')['root'] . '/database.php');
	// Run app!
	$app->get('router')->run();

});