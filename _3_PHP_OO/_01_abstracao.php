<?php
	//abstracao e o conceito de digitalizar as coisas 
	//elencando suas caracteristicas e comportamentos por meio de classes
	//as classes servem como modelos para a geracao de objetos que serão trabalhados na aplicacao 

	class Funcionario{
		//caracteristicas
		public $nome = null;
		public $telefone = null;
		public $numFilhos = null;

		//comportamentos
		function cadastrarFunc($nome, $telefone, $numFilhos){
			$this->nome = $nome;
			$this->telefone = $telefone;
			$this->numFilhos = $numFilhos;
		}
		function resumirCadFunc(){
			return "resumo de cadastro nome: $this->nome telefone: $this->telefone Filhos: $this->numFilhos<br/><hr/>";
		}
	}

	//objetos
	$func1 = new Funcionario();
	$func1->cadastrarFunc('joao', '3256 2587', '3');
	$func2 = new Funcionario();
	$func2->cadastrarFunc('jose', '3266 5152', '1');
	$func3 = new Funcionario();
	$func3->cadastrarFunc('maria', '4152 4789', '4');
	$func4 = new Funcionario();
	$func4->cadastrarFunc('ana', '1235 7412', '2');
	$func5 = new Funcionario();
	$func5->cadastrarFunc('paula', '4758 5896', '3');

	//imprimir resumo de objetos
	echo $func1->resumirCadFunc();
	echo $func2->resumirCadFunc();
	echo $func3->resumirCadFunc();
	echo $func4->resumirCadFunc();
	echo $func5->resumirCadFunc();

?>