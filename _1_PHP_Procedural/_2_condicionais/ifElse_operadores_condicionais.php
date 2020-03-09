<html>
<head>
	<meta charset="utf-8" />
	<title>Curso PHP</title>
</head>
	<body>

		<?php
		
		//Operadores de comparacao	
		//== igual
		//=== identico
		//!= ou <> diferente
		//!== não identico
		//< menor
		//> maior
		//<= menor ou igual
		//>= maior ou igual

			if(/*true*/ false){
				echo 'verdadeiro';
			} else {
				echo "falso";
			}
		//se não tiver else pode deixar sem chaves que se der falso passa direto 
		
			if(true /*false*/) echo '<br/> verdadeiro';
				
		//operadores logicos
		//&& ou AND: todas as condições verdadeiras
		//|| ou OR: se um for verdadeiro
		//XOR: se uma ou outra for verdadeira apenas
		//! negacao inverte o resultado

		//()estabelece precedencia isolando comparacoes e condicionais


		//exercicio
		//variaveis do cliente	
		$usuario_cartao = true;
		$valor_compra = 510;
		$valor_frete = 50;
		$recebeu_desconto = true;

			//condicionamento
			if($usuario_cartao && $valor_compra >= 400){
				$valor_frete = 0;
			} else if ($usuario_cartao && $valor_compra >= 300){
				$valor_frete = 20;
			} else if ($usuario_cartao && $valor_compra >= 100){
				$valor_frete = 30;
			} else {
				$recebeu_desconto = false;
			}

		?>


		<!--mostrando informações no browser-->
		<h1>Detalhes do pedido</h1>

									<!--usando operador ternario com tag curta-->
		<p>Possui cartão da loja? <?= $usuario_cartao ? "SIM" : "NÃO"; ?>
			<!--<?php
			/*se usuario tiver cartao ou valor maior ou igual a 250 condicao verdadeira 
				if($usuario_cartao || $valor_compra == 100){
					echo "SIM";
				} else {
					echo "NÃO";
				}*/
			?>-->
		</p>
		<P>Valor compra: <?= $valor_compra ?></P>

		<p>Recebeu desconto?
			<?php
				//usando variavel para receber retorno de operador ternario
				$teste = $recebeu_desconto ? "SIM" : "NÃO";
				echo $teste;
				/*if($recebeu_desconto ==true){
					echo "SIM";
				} else {
					echo "NÃO";
				}*/
			?>
		</p>
		<P>Valor frete: <?= $valor_frete ?></P>
		<!--fim do mostrando informações no browser-->


	</body>
</html>