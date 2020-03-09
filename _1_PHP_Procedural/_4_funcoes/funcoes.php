<html>
<head>
	<meta charset="utf-8" />
	<title>Curso PHP</title>
</head>
	<body>

		<?php
		//funcoes void= não tem retorno, apenas executa a logica quando e chamada
			function darboasvindas(){
				echo "Boas Vindas!!!<br/>";
			}

			darboasvindas();
			darboasvindas();
			darboasvindas();

		//funcao return= retorna um valor para a chamada e aceita parametros informados na chamada
			//que serão calculados para dar o retorno solicitado 
			function calcularAreaTerreno($largura, $comprimento){
				$area = $largura * $comprimento;
				return $area;
			}//posso atribuir o retorno a uma variavel
			$resultadoArea = calcularAreaTerreno(15, 25);
			echo "A area do terreno é $resultadoArea <br/>";
			
			//ou apenas declarar a funcao como retorno do valor passado dos parametros informados nela mesma
			echo calcularAreaTerreno(23, 42)."<br/>";
			echo calcularAreaTerreno(12, 48)."<br/>";
			echo calcularAreaTerreno(158, 112)."<br/>";
			echo calcularAreaTerreno(870, 92)."<br/>";
			echo calcularAreaTerreno(1000, 1000)."<hr/>";

	  		//assim encapsulamos a logica para chamadas no script tanto para acoes especificas como para formulas  

		//exercicio

			echo '<h1>Calculo de Imposto de renda<br/></h1>';
			
			function calcularImposto($salario){
				if ($salario <= 1903.98){
					$aliquota = null;
					echo "Se o salario for R$ $salario o declarante será de isentado de pagar a aliquota";
				} else if($salario >= 1903.99 && $salario <= 2826.65){
					$aliquota = ($salario - 1903.98) * 0.075;  
					echo "Se o salario for R$ $salario o declarante pagará a aliquota de R$ ".round($aliquota * 100) / 100;
				} else if($salario >= 2826.66 && $salario <= 3751.05){
					$aliquota = ($salario - 1903.98) * 0.15;  
					echo "Se o salario for R$ $salario o declarante pagará a aliquota de R$ ".round($aliquota * 100) / 100;
				} else if($salario >= 3751.06 && $salario <= 4664.68){
					$aliquota = ($salario - 1903.98) * 0.225;  
					echo "Se o salario for R$ $salario o declarante pagará a aliquota de R$ ".round($aliquota * 100) / 100;
				} else if($salario > 4664.68){
					$aliquota = ($salario - 1903.98) * 0.275;
					echo "Se o salario for R$ $salario o declarante pagará a aliquota de R$ ".round($aliquota * 100) / 100;
				}		
			return $aliquota;	
			}	
			calcularImposto(5000.01);

		?>
		
	</body>
</html>