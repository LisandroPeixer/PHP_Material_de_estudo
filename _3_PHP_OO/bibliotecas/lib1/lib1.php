<?php

	namespace A;
	interface Tarefas  {
		public function BaterCartãoEntrda();
		public function BaterCartãosaida();
	}
	class Funcionario implements Tarefas {
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


?>