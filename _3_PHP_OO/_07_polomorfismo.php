<?php
	//o polimorfismo tratasse de dar sobrecarga nas funcoes 
	//para que cada herdeiro possa ter comportamento diferente na chamada da mesma função
	//verifique que a velocidade de cada veiculo muda conforme declarado na funcao

	class Veiculo {				//classe pai
		public $placa = null;
		public $ano = null;		

		function acelerar(){
			echo 'velocidade maxima';
		}
		function frear(){
			echo 'frenagem imediata';
		}			
	}

	//___________________________
	class Carro extends Veiculo {	//classe filho
		public $arCondicionado = null;
		
		function __construct($placa, $ano, $arCondicionado){
			$this->placa = $placa;
			$this->ano = $ano;
			$this->arCondicionado = $arCondicionado;
		}
		function acelerar(){
			echo 'velocidade maxima até 120km/h';
		}
		function abrirPortaMala(){
			echo 'abrindo porta mala';
		}
	} 
	$carro1 = new Carro('abc1234', '2002', 'true');
	echo '<pre>';
	print_r ($carro1);
	print_r(get_class_methods($carro1));
	echo '</pre>';
	echo $carro1->acelerar();
	echo '<hr/>';	

	//__________________________
	class Moto extends Veiculo {	//classe filho
		public $cilindrada = null;
		
		function __construct($placa, $ano, $cilindrada){
			$this->placa = $placa;
			$this->ano = $ano;
			$this->cilindrada = $cilindrada;
		}
		function acelerar(){
			echo 'velocidade maxima até 200km/h';
		}
		function empinar(){
			echo 'em uma roda apenas';
		}
	}
	$moto1 = new Moto('def4321', '2019', 600);
	echo '<pre>';
	print_r ($moto1);
	print_r(get_class_methods($moto1));
	echo '</pre>';
	echo $moto1->acelerar();
	echo '<hr/>';

	//______________________________
	class Caminhao extends Veiculo {	//classe filho
		public $cacamba = null;
		
		function __construct($placa, $ano, $cacamba){
			$this->placa = $placa;
			$this->ano = $ano;
			$this->cacamba = $cacamba;
		}
		function acelerar(){
			echo 'velocidade maxima até 80km/h';
		}
		function carregarCacamba(){
			echo 'capacidade maxima';
		}
	} 
	$caminhao1 = new Caminhao('ghi2468', '2014', 'true');
	echo '<pre>';
	print_r ($caminhao1);
	print_r(get_class_methods($caminhao1));
	echo '</pre>';
	echo $caminhao1->acelerar();
?>