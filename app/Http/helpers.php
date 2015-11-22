<?php 

if(!function_exists('user')) {
	function user() {
		return Auth::user();
	}
}

if(!function_exists('unique_username')) {
	function unique_username() {
		return substr(md5(microtime()),rand(0,26),5);
	}
}