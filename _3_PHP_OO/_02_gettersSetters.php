<?php
	//os getters e setters
	//servem para capturar e modificar valores na classe de seus objetos
	class Funcionario{

		//caracteristicas
		public $nome = null;
		public $telefone = null;
		public $numFilhos = null;

		//setters modificam valores quando invocados por uma funcao void
		function setNome($nome){
			$this->nome = $nome;
		}
		function setTelefone($telefone){
			$this->telefone = $telefone;
		}
		function setNumFilhos($numFilhos){
			$this->numFilhos = $numFilhos;
		}

		//getters capturam valores quando chamados por uma funcao return
		function getNome(){
			return $this->nome;
		}
		function getTelefone(){
			return $this->telefone;
		}
		function getNumFilhos(){
			return $this->numFilhos;
		}

	}

	//objetos
	$func1 = new Funcionario();
	$func1->setNome('joao');
	$func1->setTelefone('48 32652167');
	$func1->setNumFilhos('1');
	echo $func1->getNome().' tem o telefone nº '.$func1->getTelefone().' e tem '.$func1->getNumFilhos().' filho(s)';

?>