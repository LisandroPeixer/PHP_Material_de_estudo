<?php

/* 1.2 - Esta classe é a abstração das rotas do framework 
 * usa-se namespaces para que não se confundam as classes/atributos/funcoes/variaveis 	
 */

namespace MF\Init;

abstract class Bootstrap{

	private $routes;

	abstract protected function initRoutes();

	public function __construct(){
		$this->initRoutes();
		$this->run($this->getUrl());
	}

	public function getRoutes(){
		return $this->routes;
	}

	public function setRoutes(array $routes){
		$this->routes = $routes;
	}

	protected function run($url) {
		//echo "************".$url."*************";
		foreach ($this->getRoutes() as $key => $route){
			if ($url == $route['route']){
				$class = "App\\Controllers\\".ucfirst($route['controller']);

				$controller = new $class; //App\controllers\IndexController

				$action = $route['action'];

				$controller->$action();
			}

			//echo '<pre>';
			//print_r($routes);
			//echo '</pre>';
		}
	}

	protected function getUrl(){
		//return $_SERVER;
		//return parse_url($_SERVER['REQUEST_URI']);
		return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
	}

}

?>