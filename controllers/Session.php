<?php

class Session{

	private function __construct(){}

	public static function set(string $name, string $value){
		$_SESSION[md5($name)] = encrypt($value);
	}

	public static function exists($name){
		if(array_key_exists(md5($name), $_SESSION)){
			return true;
		}else {
			return false;
		}
	}

	public static function close(){
		session_unset();
		session_destroy();
	}

	public static function get($name){
		return decrypt(
			$_SESSION[md5($name)]
		);
	}
}