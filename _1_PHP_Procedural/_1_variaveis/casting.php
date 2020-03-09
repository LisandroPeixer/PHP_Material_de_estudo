<html>
<head>
	<meta charset="utf-8" />
	<title>Curso PHP</title>
</head>
	<body>

		<?php
		
		//gettype() =>  retorna tipos de variaveis

		//integer para float e string________________________________
		$valor = 10;
		echo $valor . ' normal ' . gettype($valor);
		echo "<br/>";
		//casting
		$valor2 = (float) $valor;//float, double, real
		echo $valor2 . ' float ' . gettype($valor2);
		echo "<br/>";
		$valor3 = (string) $valor;
		echo $valor3 . ' string ' . gettype($valor3);
		echo "<br/><br/>";

		//float para integer e string________________________________
		$valorFracionado = 10.59;
		echo $valorFracionado . ' normal ' . gettype($valorFracionado);
		echo "<br/>";
		//casting
		$valorFracionado2 = (int) $valorFracionado;//float, double, real
		echo $valorFracionado2 . ' integer ' . gettype($valorFracionado2);
		echo "<br/>";
		$valorFracionado3 = (string) $valorFracionado;
		echo $valorFracionado3 . ' string ' . gettype($valorFracionado3);
		echo "<br/><br/>";

		//string para integer e boolean________________________________
		$valorString = '22.12';
		echo $valorString . ' normal ' . gettype($valorString);
		echo "<br/>";
		//casting
		$valorString2 = (int) $valorString;//float, double, real somente para numeros
		echo $valorString2 . ' integer ' . gettype($valorString2);
		echo "<br/>";
		$valorString3 = (boolean) $valorString;//boolean ou bool, 1 = verdadeiro
		echo $valorString3 . ' boolean ' . gettype($valorString3);
		echo "<br/><br/>";

		//boolean para integer e string________________________________
		$valorBool = false;//boolean ou bool, 0 = false
		echo $valorBool . ' normal ' . gettype($valorBool);
		echo "<br/>";
		//casting
		$valorBool2 = (int) $valorBool;//float, double, real somente para numeros
		echo $valorBool2 . ' integer ' . gettype($valorBool2);
		echo "<br/>";
		$valorBool3 = (string) $valorBool;
		echo $valorBool3 . ' boolean ' . gettype($valorBool3);
		echo "<br/><br/>";



		?>
		
	</body>
</html>