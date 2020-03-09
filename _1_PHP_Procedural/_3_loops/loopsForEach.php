<html>
<head>
	<meta charset="utf-8" />
	<title>Curso PHP</title>
</head>
	<body>

		<?php

			echo '<hr>-----------------Capturando valores do array com condicional if------------------<br/><br/>';
				/*o foreach separa o array em apelidos como no caos abaixo pegando itens e transpassando para item cada valor do array sendo possivel incluir na logica a condicional if*/
				$itens = array('mesa', 'geladeira', 'fogao', 'sofa', 'cama', 'guarda roupa');
				foreach($itens as $item){
					echo $item;
					if($item == 'fogao'){
						echo ' => ganhou jogo de panelas';
					}
					echo '<br/>';
				}

			echo '<hr>----------------Capturando valores do array com indice---------------------------<br/><br/>';	

				$funcionarios = array('joao', 'maria', 'jose', 'manoel', 'ana', 'aretuza');			
				foreach($funcionarios as $id => $colaborador){
					echo $id.' = '.$colaborador. '<br/>';
				}

			echo '<hr>--------------------Capturando valores de cada registro-------------------------<br/><br/>';	

				$carros = array(
					array('marca' => 'ford', 'modelo' => 'ecoSport', 'ano' => '2015', 'cor' => 'branca'),
					array('marca' => 'chev', 'modelo' => 'onix', 'ano' => '2018', 'cor' => 'azul'),
					array('marca' => 'fiat', 'modelo' => 'kronus', 'ano' => '2019', 'cor' => 'preto'),
					array('marca' => 'peogeot', 'modelo' => '305', 'ano' => '2016', 'cor' => 'prata'),
					array('marca' => 'citroen', 'modelo' => 'c4', 'ano' => '2014', 'cor' => 'vermelho')
				);	
			
				foreach($carros as $id => $veiculo){
					foreach ($veiculo as $id1 => $value) {
						echo "$id1 = $value<br/>";
					}
					echo '___________<br/>';
				}

			echo '<hr>-------------------------Capturando array estruturado--------------------------------<br/>';

				foreach($carros as $id => $veiculo){
					echo '<pre>';
						var_export($veiculo);
					echo '</pre>';
				}

						
		?>

		
	</body>
</html>