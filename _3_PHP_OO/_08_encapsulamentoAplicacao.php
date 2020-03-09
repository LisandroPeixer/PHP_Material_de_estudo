<?php
	/*O encapsulamento trata da restricao de conteudo
	 *por ela os valores contidos nos atributos podem ser:
	 *private - disponivel apenas no objeto pai (pelos getters e setters e magicos __get __set)
	 *protected - disponivel apenas pelos getters e setters e magicos __get __set
	 *public - atributos e metodos disponiveis para a aplicacao e herdeiros
	 */
echo 'acessando atributos pela aplicação<br/>';
	class Conta {
			private $saldo = '1.000.00<br/>'; //inacessivel
			protected $credito = '500.00<br/>';//acessivel pelos getters e setters magicos __get __set
			public $tipo = 'prime<br/>';//acessivel para consulta e alterações
		}
		$correntista = new Conta();
		//quando a aplicacao tenta a acessar os atributos da classe
		//neste caso so o atributo public e acessado para consulta e alterações
		echo $correntista->tipo;//public	
		$correntista->tipo = 'exclusive<br/>';	
		echo $correntista->tipo;//public		
		//echo $correntista->credito;//protected (ambos da fatal error)
		//echo $correntista->saldo;//private (ambos da fatal error)

//____________________________________________________________________________________

echo '<br/><hr/>acessando atributos pela aplicação com get e set<br/>';
	class ContaBB {
		private $saldo = '1.000.00.<br/>';//acessivel pelo metodo get e set
		protected $credito = '500.00.<br/>';//acessivel pelo metodo get e set
		public $tipo = 'exclusive<br/>';//acessivel para consulta e alterações

		public function getSaldo(){
			return $this->saldo;
		}
		public function setSaldo($valor){//e possivel incluir comandos de validacao nos metodos
			if(strlen($valor) >= 3){
			$this->saldo = $valor;
			}
		}

		public function getCredito(){
			return $this->credito;
		}
		public function setCredito($valor){
			$this->credito = $valor;
		}
	}	
	$correntistaBB = new ContaBB();
	//quando a aplicacao tenta a acessar os atributos da classe
	//neste caso so o atributo public consegue acessar para consulta e alterações sem o get e set
	echo $correntistaBB->getSaldo();//private
	$correntistaBB->setSaldo('2.000.00<br/>');
	echo $correntistaBB->getSaldo();//private	

	echo $correntistaBB->getCredito();//protected
	$correntistaBB->setCredito('10.000.00<br/>');
	echo $correntistaBB->getCredito();//protected	

	echo $correntistaBB->tipo;//public	
	$correntistaBB->tipo = 'personalite<br/>';
	echo $correntistaBB->tipo;//public

//____________________________________________________________________________________

	echo '<br/><hr/>acessando atributos pela aplicação com __get e __set magicos<br/>';

	class ContaSS {
		private $saldo = '2.000.00<br/>';//acessivel para consulta e alterações
		protected $credito = '10.000.00<br/>';//acessivel para consulta e alterações
		public $tipo = 'personalite<br/>';//acessivel para consulta e alterações

		public function __get($atributo){
			return $this->$atributo;
		}
		public function __set($atributo, $valor){
			$this->$atributo = $valor;
		}

	}
	
	$correntistaSS = new ContaSS();

	//quando a aplicacao tenta a acessar os atributos da classe
	//private protected conseguem acessar para consulta e alterações pelo __get e __set como se fosse public
	echo $correntistaSS->saldo;//private
	$correntistaSS->saldo = '12.000.00<br/>';
	echo $correntistaSS->saldo;//private	

	echo $correntistaSS->credito;//protected
	$correntistaSS->credito = '15.000.00<br/>';
	echo $correntistaSS->credito;//protected	

	echo $correntistaSS->tipo;//public	
	$correntistaSS->tipo = 'black<br/>';
	echo $correntistaSS->tipo;//public	
	//____________________________________________________________________________________

	echo '<br/><hr/>acessando METODOS pela aplicação com get/set por interface public<br/>';
	
	class ContaCEF {
		public $tipo = 'poupança<br/>';//acessivel para consulta e alterações

		private function sacar(){
			echo 'sem saldo disponivel<br/>';
		}
		protected function depositar(){
			echo 'qual valor será o deposito?<br/>';
		}
		public function juros(){
			echo 'meio % ao mes<br/>';
		}
		public function movimentarConta(){//interface public que disponibiliza o acesso
			$this->sacar();
			$this->depositar();
		}

	}
	
	$poupadorCEF = new ContaCEF();

	//quando a aplicacao tenta a acessar os METODOS da classe
	echo $poupadorCEF->tipo;
	echo $poupadorCEF->juros();
	echo $poupadorCEF->movimentarConta();//interface public que disponibiliza o acesso a metodos private e protected
	//echo $poupadorCEF->depositar();//não da acesso direto por ser protected
	//echo $poupadorCEF->sacar();//não da acesso direto por ser private
?>