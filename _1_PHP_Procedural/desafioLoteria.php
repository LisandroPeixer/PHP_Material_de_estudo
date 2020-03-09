<html>
<head>
	<meta charset="utf-8" />
	<title>Curso PHP</title>
</head>
	<body>

		<?php
		//eu fiz assim
		$loteria = array();
		$num = 1;
		while ($num <= 6) {
			$loteria[] = rand(1, 60);
			$num++;
		}
		echo '<pre>';
		print_r($loteria);
		echo '</pre>';


		echo '<br/><hr/>';

		//mas assim era o certo
		$numeros = array();	
		while (count($numeros) <= 5) {
			$num = rand(1, 60);
				if(!in_array($num, $numeros)){
					$numeros[] = $num;
			}
		}
		echo '<pre>';
		print_r($numeros);
		echo '</pre>';	
		?>

		
	</body>
</html>