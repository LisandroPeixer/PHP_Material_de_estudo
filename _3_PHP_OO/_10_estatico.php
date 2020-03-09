<?php
	/*atributo static pode ser acessado sem precisar estanciar um objeto
	 *mas não pode ser acessado por um objeto estanciado com o operador ->
	 *para acessa-lo use sempre o operador ::
	 */
	class Exemplo {		
		//no atributo estatico não precisa estanciar um objeto para ter acesso ao atributo da classe
		public static $atributo1 = 'atributo estatico';
		
		public $atributo2 = 'atributo normal';
		
		//no estatico não precisa estanciar um objeto para ter acesso ao metodo da classe
		public static function metodo1(){
			echo 'metodo estatico<br/>';
			echo $this->atributo2;
		}

		public function metodo2(){
			echo 'metodo normal<br/>';
		}

	}
	
	echo Exemplo::$atributo1.'<br/>';//use :: para acessar os metodos e atributos estaticos sem estanciar objetos
	Exemplo::metodo1();	
	Exemplo::metodo2();//é possivel fazer acesso de metodos normais por :: mas esta em desuso e pode dar problema no futuro

	$exemplo1 = new Exemplo();	
	echo $exemplo1->atributo1;//não se pode acessar atributo estatico com -> mesmo depois de instanciado, use sempre ::
	
	$exemplo1::metodo1();//não se pode usar o operador $this em metodo estatico tambem
?>