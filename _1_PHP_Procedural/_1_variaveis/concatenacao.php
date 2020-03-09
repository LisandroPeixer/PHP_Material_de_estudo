<html>
<head>
	<meta charset="utf-8" />
	<title>Curso PHP</title>
</head>
	<body>

		<?php
		//operador . para ''
		$explicacao1 = 'USE PONTOS ENTRE AS STRINGS PARA CONCATENAR VALORES';

		$explicacao2 = ' Dessa forma =  . $VARIAVEL . ';
		
		//operador ""
		$explicacao3 = 'COM ASPAS DUPLAS NÃO PRECISA DE PONTO PARA CONCATENAR, APENAS COLOQUE A VARIAVEL NA STRING QUE O PHP CONCATENA AUTOMATICAMENTE';


			echo "Lorem ipsum dolor sit amet, " . $explicacao1 . " Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. " . $explicacao2 . " Excepteur sint occaecat cupidatat non proident, $explicacao3";

		?>

		
	</body>
</html>