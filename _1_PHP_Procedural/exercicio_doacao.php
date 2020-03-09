<html>
<head>
	<meta charset="utf-8" />
	<title>Curso PHP</title>
</head>
	<body>

		<?php
		
		//Operadores condicionais	
		//== igual
		//=== identico
		//!= ou <> diferente
		//!== não identico
		//< menor
		//> maior
		//<= menor ou igual
		//>= maior ou igual
				
		//operadores de comparacao
		//&& ou AND: todas as condições verdadeiras
		//|| ou OR: se um for verdadeiro
		//XOR: se uma ou outra for verdadeira apenas
		//! negacao inverte o resultado

		//()estabelece precedencia isolando comparacoes e condicionais

		//exercicio
		//variaveis do doador

		$doador_idade = 55;
		$doador_peso = 55;
	
			//condicionamento
			if($doador_idade >=16 && $doador_idade <= 69 && $doador_peso >=50){
				$exame = "Atende aos requisitos";
			} else {
				$exame = "Não atende aos requisitos";
			} 

		?>

		<h1>Exame de Doador</h1>
		<p>
			conforme exames o paciente: <?= $exame ?>
		</p>




	</body>
</html>