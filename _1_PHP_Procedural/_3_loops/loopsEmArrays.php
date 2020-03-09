<html>
<head>
	<meta charset="utf-8" />
	<title>Curso PHP</title>
</head>
	<body>

		<?php
		
			echo '----------------------------------Array simples com echo---------------------------<br/><br/>';
				$registros = array('titulo noticia 1', 'titulo noticia 2','titulo noticia 3',);
				//print_r($registros);
				$idx = 0;
				while ($idx < 3) {				
					echo $registros[$idx].'<br/>';
					$idx++;
				}
				echo'<hr>';	

			//____________________________________________________________________________________________________
				
			echo '----------Array bidimensional com chave associativa e funcao nativa count()---------<br/><br/>';
				$jornal = array(
					array('titulo' => 'ganho na megassena', 'conteudo' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam<br/>'),
					array('titulo' => 'foi pra europa', 'conteudo' => 'quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur<br/>'),
					array('titulo' => 'grande empresa', 'conteudo' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br/>'),
				);
				
				echo '------------------For , mostrando somente a informacao do array----------------------<br/><br/>';
					for($idx = 0; $idx < count($jornal); $idx++){				
						echo $jornal[$idx]['titulo'].'<br/>';
						echo $jornal[$idx]['conteudo'].'<br/>';			
					} 
					echo '<hr/>';

				echo '-------------------Do While , mostrando somente a informacao do array----------------<br/>';
					$idx = 0;
					do {				
						echo $jornal[$idx]['titulo'].'<br/>';
						echo $jornal[$idx]['conteudo'].'<br/>';
						$idx++;
					} while ($idx < count($jornal));
					echo '<hr/>';

				echo '--------------------While Mostrando somente a informacao do array--------------------<br/>';
					$idx = 0;
					while ($idx < count($jornal)) {					
						echo $jornal[$idx]['titulo'].'<br/>';
						echo $jornal[$idx]['conteudo'].'<br/>';
						$idx++;
					}
					echo '<hr/>';
					
				echo '--------------------while Mostrando o array com estrutura----------------------------<br/>';
					$idx = 0;
					while ($idx < count($jornal)) {				
						print_r($jornal[$idx]);
						echo '<br/>';
						$idx++;
					}
					echo 'o array possui '.count($jornal).' elementos <br/><hr/>';				

			//____________________________________________________________________________________________________

			echo '<pre>';
				print_r($jornal);
			echo '<pre/>';
					
		?>
		
	</body>
</html>