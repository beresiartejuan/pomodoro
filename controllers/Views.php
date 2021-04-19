<?php

class Views {

	public static function getIndex(){
		global $app;
		if(Session::exists('user_id')){
			return $app->get('engine')->render('home');
		}else{
			return $app->get('engine')->render('index');
		}
	}
}