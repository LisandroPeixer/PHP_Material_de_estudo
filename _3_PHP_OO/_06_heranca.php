<?php
	//heranca e quando uma classe doa seus metodos e atributos para as classes que a 'extends'
	//aqui a classe veiculo doa para seus filhos todos os atributos e metodos 
	//facilitando a escrita do codigo

	class Veiculo {				//classe pai
		public $placa = null;
		public $ano = null;
		public $modelo = null;
		public $marca = null;
		public $cor = null;

		function acelerar(){
			echo 'velocidade maxima';
		}
		function frear(){
			echo 'frenagem imediata';
		}			
	}

	//___________________________
	class Carro extends Veiculo {		//classe filho
		public $arCondicionado = null;
		public $direcaoHidraulica = null;
		public $vidroEletrico = null;

			function __construct($placa, $ano, $modelo, $marca, $cor, $arCondicionado, $direcaoHidraulica, $vidroEletrico){
			$this->placa = $placa;
			$this->ano = $ano;
			$this->modelo = $modelo;
			$this->marca = $marca;
			$this->cor = $cor;	
			$this->arCondicionado = $arCondicionado;
			$this->direcaoHidraulica = $direcaoHidraulica;
			$this->vidroEletrico = $vidroEletrico;
		}
		function abrirPortaMala(){
			echo 'abrindo porta mala';
		}

	} 
	$carro1 = new Carro('abc1234', '2002', 'gol', 'volks', 'azul', 'true', 'true', 'true');
	echo '<pre>';
	print_r ($carro1);
	print_r(get_class_methods($carro1));
	echo '</pre>';
	echo $carro1->acelerar();
	echo '<hr/>';

	//___________________________
	class Moto extends Veiculo {		//classe filho
		public $cilindrada = null;
		public $partidaEletrica = null;
		public $carenagem = null;

		function __construct($placa, $ano, $modelo, $marca, $cor, $cilindrada, $partidaEletrica, $carenagem){
			$this->placa = $placa;
			$this->ano = $ano;
			$this->modelo = $modelo;
			$this->marca = $marca;
			$this->cor = $cor;	
			$this->cilindrada = $cilindrada;
			$this->partidaEletrica = $partidaEletrica;
			$this->carenagem = $carenagem;
		}
		function empinar(){
			echo 'em uma roda apenas';
		}

	}	

	$moto1 = new Moto('def4321', '2019', 'ninja', 'kawazaki', 'verde', '600', 'true', 'true');
	echo '<pre>';
	print_r ($moto1);
	print_r(get_class_methods($moto1));
	echo '</pre>';
	echo $moto1->frear();
	echo '<br/>';
	echo $moto1->empinar();
?>