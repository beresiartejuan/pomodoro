<?php

define('nameapp', 'Pomodoro');

define('link', 'http://localhost:8010');
defined('__salt__') or define('__salt__', 'edcfwb987lA');

return [
	'root' => dirname(__DIR__),
	'dbreal' => true,
	'debug' => true,
	'trickuser' => true,
	'db_credentials' => [
		'user' => 'root',
		'password' => '',
		'host' => 'localhost',
		'name' => 'pomodoro'
	]
];