<?php
	/*atributos e metodos private não são herdados para a classe filho
	 *neste caso ao tentar estanciar este atributo a classe filho cria um novo atributo 
	 *que não tem relacao com a classe pai
	 */
	echo 'acessando atributos pela herança<br/>';
	
		class ContaPrime { //classe pai
			private $saldo = '1.000.00<br/>'; //private não e herdado pelo filho
			protected $credito = '500.00<br/>';//herdado e acessivel para consulta e alterações pelo get set
			public $tipo = 'prime<br/>';//herdado e acessivel para consulta e alterações
		}
		
		class ContaExclusive extends ContaPrime { //classe filho

			public function getAtributo($atributo){
				return $this->$atributo;
			} 
			public function setAtributo($atributo, $valor){
				$this->$atributo = $valor;
			}
		}

		$correntista = new ContaExclusive();	
		echo '<pre>';
		print_r($correntista); //a conta filho herda somente o credito 'protected' e o tipo da conta 'public'
		echo '</pre>';
		
		echo $correntista->tipo;
		$correntista->tipo = 'estudante<br/>';//mudo tipo
		echo $correntista->tipo;

		echo $correntista->getAtributo('credito');
		$correntista->setAtributo('credito', '150.00<br/>');//altera saldo
		echo $correntista->getAtributo('credito');

		echo $correntista->getAtributo('saldo');//private é exclusivo da classe pai(vai dar erro!!!)
		$correntista->setAtributo('saldo', '750.00<br/>');//mas o atributo saldo pode ser estanciado de forma indempendente pelo setAtributo 
		echo $correntista->getAtributo('saldo');

		echo '<pre>';
		print_r($correntista);//o saldo aparece 2 vezes com print-r mas 1 não tem relacao com o outro da conta filho
		echo '</pre>';	

	//____________________________________________________________________________________

	/*Quando o __get e __set magicos são estaciados na classe pai,
	 *A classe filho herda os metodos e acessa os atributos (quebrando o encapsulamento),
	 */	
	echo '<br/><hr/>acessando atributos pela heranca com get e set<br/>';

		class ContaBB {
			private $saldo = '1.000.00<br/>';//acessivel pelo metodo get e set
			protected $credito = '500.00<br/>';//acessivel pelo metodo get e set
			public $tipo = 'exclusive<br/>';//acessivel para consulta e alterações

			public function __get($atributo){
				return $this->$atributo;
			}
			public function __set($atributo, $valor){
				$this->$atributo = $valor;
			}
		}

		class ContaBBSalario extends ContaBB {		
		}

		$correntistaBB = new ContaBB();

		echo '<pre>';
		print_r(get_class_methods($correntistaBB));
		echo '</pre>';

		echo $correntistaBB->__get('saldo');//mas e possivel acessar o saldo da conta pai com __get __set magico
		$correntistaBB->__set('saldo', '10.000.00<br/>');//e alterar seu valor tambem
		echo $correntistaBB->__get('saldo');

	//____________________________________________________________________________________

	/*E quando __get e __set magicos são estaciados na classe filho,
	 *A classe filho nao consegue acessar os atributos da classe pai,
	 *Mas é possivel atribuir novos valores para estes atributos,
	 *Sendo que esses valores não tem relação com a classe pai,
	 */	
	echo '<br/><hr/>acessando atributos pela aplicação com __get e __set magicos<br/>';

		class ContaSS {
			//atributos
			private $saldo = '2.000.00<br/>';//nao acessa
			protected $credito = '10.000.00<br/>';//nao acessa
			public $tipo = 'personalite<br/>';//nao acessa
		}

		class ContaSSUniversitario {

			public function __get($atributo){
				return $this->$atributo;
			}
			public function __set($atributo, $valor){
				$this->$atributo = $valor;
			}
		}
		
		$correntistaSS = new ContaSSUniversitario();

		echo '<pre>';
		print_r(get_class_methods($correntistaSS));
		echo '</pre>';

		echo $correntistaSS->__get('saldo');
		echo $correntistaSS->__get('credito');
		echo $correntistaSS->__get('tipo');
		
		//e possivel atribuir valores por causa do __get __set magico mas não tem vinculo com o pai
		$correntistaSS->__set('saldo', '2870.00');
		$correntistaSS->__set('credito', '1359.00');
		$correntistaSS->__set('tipo', 'unitop');
		$correntistaSS->__set('caracteristica', 'indempendente');

		echo '<pre>';
		print_r($correntistaSS);
		echo '</pre>';

	//____________________________________________________________________________________

	/*Com relacao aos metodos,
	 *O objeto filho pode acessar os metodos do objeto pai por meio de interfaces publicas,
	 *Sendo possivel fazer polimorfismo da classe pai (modificando a acao do mesmo metodo)
	 */   		
	echo '<br/><hr/>acessando METODOS pela aplicação com get/set por interface public <br/>';

		class ContaCEF {
			private $saldo = '25.000.00<br/>';//nao acessa
			protected $credito = '60.000.00<br/>';//nao acessa
			public $tipo = 'corrente/poupança<br/>';//acessivel para consulta e alterações
					
			public function __get($atributo){ //get set atributos(MAGICOS)
				return $this->$atributo;
			}
			public function __set($atributo, $valor){
				$this->$atributo = $valor;
			}
			
			private function sacar(){ //metodos
				echo 'sem saldo disponivel<br/>';
			}
			protected function depositar(){
				echo 'qual valor será o deposito?<br/>';
			}
			public function juros(){
				echo 'meio % ao mes<br/>';
			}

			public function movimentarConta(){//interface public que disponibiliza o acesso
				$this->sacar();	//metodo
				$this->depositar(); //metodo
			}
		}

		class ContaCEFMCMV extends ContaCEF{

			public function __construct(){				
				echo '<pre>';
				print_r(get_class_methods($this)); //mostra todos os metodos da classe pai
				echo '</pre>';
			}

			protected function depositar(){
				echo 'deposita 1.000.000.00<br/>';
			}
		}
		
		$poupadorCEF = new ContaCEFMCMV();

		echo '<pre>';
		print_r($poupadorCEF);
		echo '</pre>';

		echo '<pre>';
		print_r(get_class_methods($poupadorCEF));//mostra so os metodos publics
		echo '</pre>';

		echo $poupadorCEF->movimentarConta();//acessando metodos private e protected pelo metodo public

	//____________________________________________________________________________________



	

	

?>