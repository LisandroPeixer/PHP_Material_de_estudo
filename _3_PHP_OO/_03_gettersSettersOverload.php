<?php
	//neste caso e feito somente um get/set para todos os atributos da classe
	//transformando atributos em variaveis que servem de parametros na chamada do metodo
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

	}

	//objetos
	$func1 = new Funcionario();
	$func1->__set('nome', 'joao');
	$func1->__set('telefone', '48 32652167');
	$func1->__set('numFilhos', '1');
	echo $func1->__get('nome').' tem o telefone nº '.$func1->__get('telefone').' e tem '.$func1->__get('numFilhos').' filho(s)';

?>