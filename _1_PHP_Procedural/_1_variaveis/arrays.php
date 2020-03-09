<html>
<head>
	<meta charset="utf-8" />
	<title>Curso PHP</title>
</head>
	<body>

		<?php
			
			//array
			$lista_frutas = array('banana', 'mamao', 'maca', 'laranja');//classico
			$lista_frutas[] = 'abacate';//acrescentar fora do array

				echo "<pre>";//mostra array em lista
					var_dump($lista_frutas);//mostra tipo da variavel e conta caracteres
				echo "</pre>";
			
			echo "<hr/>";

				echo "<pre>";
					print_r($lista_frutas);			
				echo "</pre>";

			echo "<hr/>";

			$lista_carros = ['vectra', 'golf', 'stilo', '305'];//declara com colchetes

				echo "<pre>";
					var_dump($lista_carros);//mostra tipo da variavel e conta caracteres
				echo "</pre>";
			
			echo "<hr/>";

				echo "<pre>";
					print_r($lista_carros);			
				echo "</pre>";

			echo $lista_carros[2];//recuperando variavel pela coordenada

			echo "<hr/>";

			//associando indices a variaveis
			$lista_cidades = ['a' => 'Rio de janeiro', '@' => 'Brasilia', '8' => 'Floripa', 'dse' => 'Nova Yorque'];//declara com colchetes

				echo "<pre>";
					var_dump($lista_cidades);//mostra tipo da variavel e conta caracteres
				echo "</pre>";
			
			echo "<hr/>";

				echo "<pre>";
					print_r($lista_cidades);			
				echo "</pre>";
		
			echo $lista_cidades['dse'] . '<br/>';//recuperando variavel pela coordenada
			
			$lista_cidades['dse'] = 'Nova Trento';//alterando variavel pelo indice
			echo $lista_cidades['dse'];//recuperando variavel pela coordenada
	
			echo "<hr/>";

			$lista_compras = []; 
			$lista_compras['verduras'] = ['alface', 'tomate', 'cebola', 'pimentao']; 
			$lista_compras['proteina'] = ['carne', 'frango', 'peixe', 'ovo']; 
			$lista_compras['limpeza'] = ['amaciante', 'omo', 'cloro', 'detergente']; 

				echo "<pre>";
					print_r($lista_compras);			
				echo "</pre>";
			echo $lista_compras['limpeza'][0]. '<br/>';//recuperando variavel pela coordenada
			echo $lista_compras['proteina'][1]. '<br/>';//recuperando variavel pela coordenada

			//funcoes nativas para arrays

			//procurando em arrays (true = 1 e false = '')
			echo in_array('peixe', $lista_compras['proteina']). '<br/>';
			$existe =  in_array('carne', $lista_compras['proteina']);
			if($existe){
				echo 'verdadeiro<br/>';
			} else {
				echo 'falso<br/>';
			};

			echo array_search('cloro', $lista_compras['limpeza']);//recupera o indice da variavel no array, senao retorna null

			//array multidimensional 
			$tudo = [
				'frutas' => $lista_frutas,
				'carros' => $lista_carros,
				'cidades'=> $lista_cidades,
				'compras' => $lista_compras,
			];

			echo "<pre>";//mostra array em lista
					print_r($tudo);//mostra tipo da variavel e conta caracteres
			echo "</pre>";


			  			//cuidado com as variavels null false e '', elas são retorno das funcoes nativas e podem confundir 
			  			//null é null e não é '' nem false
			  			//false e '' são '' mas não são null 

			//pra saber se e um array
			$retorno = is_array($tudo);

			if($retorno){
				echo 'sim é um array<br/>';
			}else{
				echo 'não é um array<br/>';
			};

			//saber as chaves de um array
			$chaves = array_keys($tudo);
				echo "<pre>";//mostra array em lista
					print_r($chaves);
				echo "</pre>";

			//ordenando array com indices
			sort($lista_frutas);//informa true ou false 
				echo "<pre>";//mostra array em lista
					print_r($lista_frutas);
				echo "</pre>";

			//ordenando array preservando os indices	
			asort($lista_carros);//informa true ou false 
				echo "<pre>";//mostra array em lista
					print_r($lista_carros);
				echo "</pre>";

			//conta elementos
			echo count($lista_carros).'<br/>';

			//juntando arrays
			$novo_array = array_merge($lista_compras['verduras'], $lista_compras['proteina'], $lista_compras['limpeza'], $lista_frutas);
				echo "<pre>";//mostra array em lista
					print_r($novo_array);
				echo "</pre>";

			//dividindo strings como exemplo transformar data no modelo brasil para o modelo americano
			$string = '11/12/2019';
			$array_retorno = explode('/', $string);
				echo "<pre>";//mostra array em lista
					echo $string.'<br/>';
					print_r($array_retorno);
					echo $array_retorno[2].'-'.$array_retorno[1].'-'.$array_retorno[0];
				echo "</pre>";

			//juntando elementos de array em uma string
			$string_retorno = implode(' <br/>', $novo_array);
				echo $string_retorno;


//mais no https://www.php.net/manual/en/book.array.php


		?>

		
	</body>
</html>