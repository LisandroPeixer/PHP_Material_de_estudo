<?php
	//construct e o metodo que gera objetos 
	//e destruct o metodo que descarta objetos
	class Pessoa{

		//caracteristicas
		public $nome = null;
	
		//construct
		function __construct($nome){
			echo 'objeto construido <br/>';
			$this->nome = $nome;
		}
		//destruct
		function __destruct(){
			echo 'objeto destruido <br/>';
		}

		//get
		function __get($atributo){
			return $this->$atributo;
		}

		//metodo
		function correr(){
			return $this->__get('nome'). 'esta correndo <br/>';
		}

	}

	//objetos
	$pessoa1 = new Pessoa('Jorge <br/>');//chamada de metodo construct()
	echo 'nome: '. $pessoa1->__get('nome');//captura e mostra atributo nome do objeto 
	echo $pessoa1->correr();//chamada de metodo correr()
	unset($pessoa1);//chamada de metodo destruct()
	
?>