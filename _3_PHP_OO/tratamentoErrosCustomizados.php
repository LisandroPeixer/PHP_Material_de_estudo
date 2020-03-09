<?php
	/* Neste caso estamos criando uma classe para customizar o tratamento de erros
	 * Esta classe herda de Exceptions 
	 * E faz o tratamento conforme declarado em suas funções
	 */

	class ExcecoesCustomizadas extends Exception{

		private $erro = '';
		public function __construct($erro){
			$this->erro = $erro;
		}
		public function exibirMsgErroCustomizada(){
			return $this->erro;
		} 
		public function exibirMsgErroCustomizada2(){
			echo '<div style= "background: red; color: #fff; margin: 500px; padding: 50px; display:inline">';
			echo $this->erro;
			echo '</div>';
		} 
	}

	try{		 
		throw new ExcecoesCustomizadas("Deu ruim".date('d/m/Y h:i:s').'<br/>');		
	} catch (ExcecoesCustomizadas $ex) {//pega o erro aplica na variavel $ex e executa a logica descrita
		// echo '<p style="color: red">' .$ex->exibirMsgErroCustomizada(). '</p>';
	} 

	try{		 
		throw new ExcecoesCustomizadas("Deu ruim".date('d/m/Y h:i:s').'<br/>');		
	} catch (ExcecoesCustomizadas $ex) {//pega o erro aplica na variavel $ex e executa a logica descrita
		 $ex->exibirMsgErroCustomizada2();
	}

	//error (php)
	//exception (programadores)
	//customizadas (bibliotecas)
	 
?>