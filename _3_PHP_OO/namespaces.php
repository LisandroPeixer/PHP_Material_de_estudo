<?php
	
	//namespace serve para encapsular classes interfaces e outros elementos com o mesmo nome
	//muito util para evitar conflitos com bibliotecas externas 'APIs'
	//mais informações em: https://packagist.com/ 


	namespace A;
	interface Tarefas  {
		public function BaterCartãoEntrda();
		public function BaterCartãosaida();
	}
	//neste caso a classe do namespace A esta implementando a interface do namespace \B\ 'Crossover'
	class Funcionario implements \B\Tarefas {
		public $nome = 'giovana';
		public function __get($Atributo){
			return $this->$Atributo;
		}
		public function __construct(){
			echo '<pre>';
			print_r(get_class_methods($this));
			echo '</pre>';			
		}
		public function FazerRelatorio(){}
		public function Pausa(){}
		public function BaterCartãoEntrda(){}
		public function BaterCartãosaida(){}		
	}

	namespace B;
		interface Tarefas {
		public function FazerRelatorio();
		public function Pausa();
	}
	//a classe funcionario do namespace b esta implementando todas as tarefas 
	class Funcionario {
		public $nome = 'maria';
		public function __get($Atributo){
			return $this->$Atributo;
		}
		public function __construct(){
			echo '<pre>';
			print_r(get_class_methods($this));
			echo '</pre>';			
		}
	}

//este elemento esta contido no namespace B
$func = new Funcionario();
print_r($func);
echo $func->__get('nome').'<br/>';

//e este elemento esta contido no namespace a
//para isso e necessário usar \A\ para indicar o namespace
$func1 = new \A\Funcionario();
print_r($func1);
echo $func1->__get('nome').'<br/>';

?>