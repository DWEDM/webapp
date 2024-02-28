<?php

class App
{

	protected $controller = 'Home';
	protected $method = 'index';
	protected $params = [];

	public function __construct()
	{
		$url = $this->splitURL();
		if(isset($url[0]))
		{
			if(file_exists('../app/controllers/' . ucfirst($url[0]) . '.php'))
			{
				$this->controller = ucfirst($url[0]);
				unset($url[0]);
			} else{
				$this->controller = '_404';
			}
		}

		require '../app/controllers/' . $this->controller . '.php';
		$this->controller = new $this->controller;

		if(isset($url[1])){
			if(isset(method_exists($url[1])){
				$this->method = $url[1];
				unset($url[1]);
			}
		}
		$this->params = $url ? array_values($url) : [];
		call_user_func_array([$this->controller, $this->method], $this->params);
	}

	private function splitURL()
	{
		if (isset($_GET['url'])){
			$url = explode("/", trim($_GET[$url], "/"));
			return $url;
		}
	}
}

