<?php
	//e possivel tambem utilizar os get/set magicos dentro de outros metodos
	//neste caso estamos usando o metodo get dentro do metodo resumirCadFunc
	class Funcionario{

		//caracteristicas
		public $nome = null;
		public $telefone = null;
		public $numFilhos = null;

		//getters e setters overload
		function __set($atributo, $valor){
			$this->$atributo = $valor;
		}

		function __get($atributo){
			return $this->$atributo;
		}

		//metodo
		function resumirCadFunc(){
			return "resumo de cadastro nome: ".$this->__get('nome')." telefone: ".$this->__get('telefone')." Filhos: ".$this->__get('numFilhos')."<br/><hr/>";
		}

	}

	//objetos
	$func1 = new Funcionario();
	$func1->__set('nome', 'joao');
	$func1->__set('telefone', '48 32652167');
	$func1->__set('numFilhos', '1');
	echo $func1->resumirCadFunc();

?>