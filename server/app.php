<?php

class App{

	private array $vars;
	public array $events = [];

	public function __construct(){}

	public function require($dir, $objects = []){

		$app = $this;

		foreach ($objects as $object) {
			$$object = $this->vars[$object];
		}

		foreach (glob($dir . '/*.php') as $file) {
			require_once $file;
		}
	}

	public function on($event, $callback){
		$this->events[$event] = $callback;
	}

	public function set($name, $value){
		$this->vars[$name] = $value;
		
	}

	public function get($name){
		return $this->vars[$name];
	}

	public function __destruct(){
		if(array_key_exists('ready', $this->events)){
			$this->events['ready']();
		}
	}
}

return new App();