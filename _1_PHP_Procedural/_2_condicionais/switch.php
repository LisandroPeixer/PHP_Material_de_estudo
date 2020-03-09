<html>
<head>
	<meta charset="utf-8" />
	<title>Curso PHP</title>
</head>
	<body>

		<?php
		
		//não diferencia tipos de variaveis se usar ==
		//cuidado com o true, o php trata este paramatro como 1 e pode confundir na escolha

		$parametro = 8;

		switch($parametro){
			case 1 == $parametro:
				echo "Entrou no case 1";
				break;

			case '2' == $parametro:
				echo "Entrou no case 2";
				break;

			case 3 == $parametro:
				echo "Entrou no case 3";
				break;

			default:
				echo "Entrou no default";
				break;
		}

		?>

		
	</body>
</html>