<?php
	class Request{
		private static $get = [], $post = [];

		public function __construct(){			
			static $session_open = false;
			
			if($session_open === false){
				session_start();
				$session_open = true;
			}
			
			self::$get = $_GET;
			self::$post = $_POST;
			unset($_GET, $_POST);
		}
		
		public  function uri($index){
			$uri = $this->get('cont');
			if(!$uri) $uri = 'Home_cont/index';
			$uri_items = explode('/', $uri);
			if(isset($uri_items[$index])) return $uri_items[$index];
			
			return null;
		}
		
		public  function get($var){
			if(isset(self::$get[$var])) return self::$get[$var];
			return null;
		}
		
		public  function post($var){
			if(isset(self::$post[$var])) return self::$post[$var];
			return null;
		}
		
		public  function session($var, $val = null){
			if($val !== null) $_SESSION[$var] = $val;

			if(isset($_SESSION[$var])) return $_SESSION[$var];
			return null;
		}
	}
	
