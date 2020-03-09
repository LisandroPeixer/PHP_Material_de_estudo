<html>
<head>
	<meta charset="utf-8" />
	<title>Curso PHP</title>
</head>
	<body>

		<?php
		//strings
			$texto = 'Curso Completo de PHP';

			echo $texto . '<br/>';
			echo strtolower($texto) . '<br/>';// todas minusculas		
			echo strtoupper($texto) . '<br/>';//todas mauiusculas 			
			echo ucfirst($texto) . '<br/>';//so a primeira maiuscula 			
			echo strlen($texto) . '<br/>';//conta caracteres 			
			echo str_replace('PHP', 'JavaScript', $texto) . '<br/>';//troca caracteres			
			echo str_replace('o', '@', $texto) . '<br/>'; 			
			echo substr($texto, 6, 9) . '<br/>';//extrai caracteres 			

		//mais em https://www.php.net/manual/en/book.strings.php

		//matematicas
			$num = 7.5;

			echo ceil($num) . '<br/>';//arredonda pra cima
			echo floor($num) . '<br/>';//arredonda pra baixo
			echo round($num) . '<br/>';//arredonda pela fração
			echo rand(1, 100) . '<br/>';//gera aleatorio
			echo getrandmax() . '<br/>';//mostra valor aleatorio maximo
			echo sqrt(90) . '<br/>';//raiz quadrada
			echo abs(90 - 150) . '<br/>';//positivo

		//mais em https://www.php.net/manual/en/book.math.php

		//datas e horas

			echo date('d D/ M m/ Y H:i') . '<br/>';//retorna data e hora do sistema
			echo date_default_timezone_get() . '<br/>';//retorna timezone do sistema
			//para configurar pode ser no php.ini ou com a funcao abaixo
			echo date_default_timezone_set('America/Sao_Paulo') . '<br/>';//configura timezone do sistema
			echo date('d D/ M m/ Y H:i') . '<br/>';//retorna data e hora do sistema

			//contando datas usasse timestamp 1970-01-01
			$data_inicial = '2018-04-24';
			$data_final = '2018-05-15';

			$time_inicial = strtotime($data_inicial);//conta em milissegundos desde 1970-01-01
			$time_final = strtotime($data_final);
			echo $data_inicial . ' - ' . $time_inicial . '<br/>';
			echo $data_final . ' - ' . $time_final . '<br/>';
			echo ((($time_final - $time_inicial) / 60) / 60) / 24  . '<br/>';//converte milissegundos para dias

		//mais em https://www.php.net/manual/en/function.date.php 			

		?>
		
	</body>
</html>