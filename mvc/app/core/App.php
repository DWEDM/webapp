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

		if(isset($url))
	}
}

