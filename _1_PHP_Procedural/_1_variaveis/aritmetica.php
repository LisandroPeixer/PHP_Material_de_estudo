<html>
<head>
	<meta charset="utf-8" />
	<title>Curso PHP</title>
</head>
	<body>

		<?php
		
		$num1 = 13;
		$num2 = 4;

		echo "a soma de $num1 e $num2 é: " . ($num1 + $num2). "<br/>";
		echo "a subtração de $num1 e $num2 é: " . ($num1 - $num2). "<br/>" ;
		echo "a multiplicação de $num1 e $num2 é: " . ($num1 * $num2). "<br/>";
		echo "a divisao de $num1 e $num2 é: " . ($num1 / $num2). "<br/>";
		echo "o modulo de $num1 e $num2 é: " . ($num1 % $num2). "<br/><br/>";


		//atribuicao

		$num3 = 10;
		echo $num3 . ' sem atribuicao <br/>';
		$num3 = $num3 + 5;
		echo $num3 . ' com atribuicao <br/>';
		$num3 += 15;//simplificando
		echo $num3 . ' atribuicao simplificada <br/><br/>'; //aceita todos os operadores


		//Incremento e Decremento
		echo "Incremento Decremento <br/>";

		$ad = 7;
		echo "Se o valor da variavel é: $ad <br/>";
		echo 'O valor da variavel pos-incremento é: ' . $ad++ . ' $ <br/>';
		echo "Então o valor da variavel agora é: $ad <br/>";
		echo 'Mas o valor da variavel pre-incremento é: ' . ++$ad . ' $ <br/>';
		
		echo "Se o valor da variavel é: $ad <br/>";
		echo 'O valor da variavel pos-decremento é: ' . $ad-- . ' $ <br/>';
		echo "Então o da variavel é: $ad <br/>";
		echo 'Mas o da variavel pre-decremento é: ' . --$ad . ' $ <br/>';
		?>
		
	</body>
</html>