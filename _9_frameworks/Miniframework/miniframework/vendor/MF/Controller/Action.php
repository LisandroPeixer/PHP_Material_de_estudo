<?php 
/* 2.2 - Esta classe é a abstração do controller do framework 
 * usa-se namespaces para que não se confundam as classes/atributos/funcoes/variaveis 	
 * Aqui a funcao render() e capturada pelo foreach de 'index.phtml' e 'sobre_nos.phtml'  
 */

namespace MF\Controller;

abstract class Action {

	protected $view;

	public function __construct(){	
		$this->view = new \stdClass();
	}

	protected function render($view, $layout){
		$this->view->page = $view;
		if(file_exists("../App/Views/".$layout.".phtml")){
			require_once "../App/Views/".$layout.".phtml";
		} else {
			$this->content();
		}
	}

	protected function content() {
		//echo get_class($this).'<br>';//mostra rota atual
		$classAtual = get_class($this);//atribui rota a variavel
		$classAtual = str_replace('App\\Controllers\\', '', $classAtual);//modifica nome da rota/atribui variavel
		$classAtual = strtolower(str_replace('Controller', '', $classAtual));//modifica nome da rota/minusculas
		//echo $classAtual;
		require_once "../App/Views/".$classAtual."/".$this->view->page.".phtml";//evita redundancia de codigo
	}
}

?>