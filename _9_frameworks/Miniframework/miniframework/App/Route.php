<?php 

/* 1 - Aqui iniciasse as rotas do framework 
 * o usuario foi direcionado pra cá pelo index.php da pasta public (arquivo que inicia a aplicação)
 * usanmos a classe abstrata 'Route' como herança de MF\init\Bootstrap(está na pasta vendor)
 * a solicitação daqui é encaminhada para o indexController.php
 */

namespace App;

use MF\init\Bootstrap;//herda metodos da arquitetura

class Route extends Bootstrap{

	protected function initRoutes(){

		$routes['home'] = array(
			'route' => '/',
			'controller' => 'indexController',
			'action' => 'index'
		);

		$routes['sobre_nos'] = array(
			'route' => '/sobre_nos',
			'controller' => 'indexController',
			'action' => 'sobreNos'
		);

		$this->setRoutes($routes);

	}

}

?>