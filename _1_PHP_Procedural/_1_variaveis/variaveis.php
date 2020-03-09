<html>
<head>
	<meta charset="utf-8" />
	<title>Curso PHP</title>
</head>
	<body>

		<?php
		/*por ser de tipagem fraca as variaveis podem receber e modificar seus valores indenpendentemente de sua tipagem ou valor inicial*/

		$nome = 'Estanislau House';//string
		$idade = 52;//int
		$peso = 118.54;//float
		$sedentario = true//boolean	(true = 1/ false = vazio)
		?>

		<h1>Ficha Cadastral</h1><br/>
		<p>Nome: <?= $nome ?></p><br/>
		<p>Idade: <?= $idade ?></p><br/>
		<p>Peso: <?= $peso ?></p><br/>
		<p>Sedentario: <?= $sedentario ?></p><!--imprimindo variavel no html-->


	</body>
</html>