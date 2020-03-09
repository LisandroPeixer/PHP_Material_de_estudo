<?php

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

?>