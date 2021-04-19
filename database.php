<?php

extract($app->get('config')['db_credentials']);

try {

	$__dns = 'mysql:host='. $host .';dbname='. $name .';charset=utf8';
	$db = new \FaaPz\PDO\Database($__dns, $user, $password);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	return $db;

} catch (PDOException $e) {
	echo $app->get('errorhandler')->handleException($e);
}