<html>
<head>
	<meta charset="utf-8" />
	<title>Curso PHP</title>
</head>
	<body>

		<?php
			/*variaveis contantes podem ser recuperadas em qualquer lugar do script, declare define entre parenteses coloque o nome da variavel entre aspas caixa alta e o valor separado pro virgula entre aspas caixa baixa*/
			define('BD_URL', 'endereco_bd_dev');
			define('BD_USUARIO', 'usuario_dev');
			define('BD_SENHA', 'senha_dev');


			//nao precisa de $ pra recuperar
			echo BD_URL . '<br />';	
			echo BD_USUARIO . '<br />';	
			echo BD_SENHA . '<br />' 

		?>

		
	</body>
</html>