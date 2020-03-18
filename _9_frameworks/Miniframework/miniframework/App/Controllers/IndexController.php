<?php 

 /* 2.1 - A rota veio de Route direcionada para o indexController
  * Que direciona o usuario para a view correta pela função render(com os parametros especificos)
  * esta classe herda metodos de vendor/MF/Controller/action 
  * simplificando o roteamento pela função render 
  * que tranforma o endereço em um titulo e evita redundancia de codigo
  * 4.2 - as paginas recebem a conneccao com o banco de dados pela chamada da funcao Connection::getDb();
  * 5.1 - A conexão passa a ser abstraida de MF\Model\Container(assim todas as rotas compartilham a mesma conexao)
  */ 

namespace App\Controllers;

//miniframework
use MF\Controller\Action;
use MF\Model\Container;

//models
use App\Models\Produto;
use App\Models\Info;

//use App\Connection;

class IndexController extends Action{

	public function index() {
		//echo 'chegamos ao IndexController e disparamos a action index';
		//$this->view->dados = array('ferrary', 'lamburguini', 'mercedes');
		//require_once "../App/Views/index/index.phtml";
		
		//conexao
		//$conn = Connection::getDb();
		//modelo
		//$produto = new Produto($conn);
		 	
		$produto = Container::getModel('Produto');
		//funcao
		$produtos = $produto->getProdutos();
		$this->view->dados = $produtos;
		$this->render('index', 'layout2');
	}

	public function sobreNos() {
		//echo 'chegamos ao IndexController e disparamos a action sobreNos';
		//$this->view->dados = array('Breakin Bad', 'Mentalist', 'CSI');
		//require_once "../App/Views/index/sobreNos.phtml";

		//conexao
		//$conn = Connection::getDb();
		//modelo
		//$info = new Info($conn);
		

		$info = Container::getModel('Info');
		//funcao
		$infos = $info->getInfo(); 
		$this->view->dados = $infos;
		$this->render('sobreNos', 'layout1');
	}

}

 ?>