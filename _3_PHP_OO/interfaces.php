<?php
	
	/*interfaces definem metodos para as classes
	 *quando criamos uma interface estamos forçando a classe filho a inplementar 
	 *as interfaces da classe pai,
	 *caso nao seja feito o PHP da um fatal error 
	 */
	
	interface Automovel {
		public function acelerar();
		public function frear();
	}

	//interfaces Herdam de outras interfaces 
	interface Carro extends Automovel {
		public function levarPassageiros();
	}

	interface Caminhão extends Automovel {
		public function levarCarga();
	}

	interface Moto extends Automovel {
		public function empinar();
	}

	//assim todas as classes que implementam a interface tem que aplicar os metodos herdados pela implementação
	class Car implements Automovel, Carro{
		public function acelerar(){
		}
		public function frear(){
		}
		public function levarPassageiros(){
		}	
	}

	class Truck {
		public function acelerar(){
		}
		public function frear(){
		}
		public function levarCarga(){
		}
	}

	class Cicle implements Automovel, Moto {
		public function acelerar(){
		}
		public function frear(){
		}
		public function empinar(){
		}
	}
//veja que não temos erros na pagina pela devida implementação com as heranças das interfaces nas classes

?>