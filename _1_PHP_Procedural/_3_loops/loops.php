<html>
	<head>
		<meta charset="utf-8" />
		<title>Curso PHP</title>
	</head>

	<body>

		<?php
		//for_________________________________________________________________________

			//loop for
				echo '-------------inicio do for--------------<br/>';
				for($f = 1;$f < 10; $f++){
					echo$f. 'for percorendo <br/>';
				}
				echo '-------------fim do for-------------<br/><br/>';

			//looop for com break e sem condicao de fim
				echo '---------inicio do for com break----------<br/>';
				for($f = 1; ; $f++){
					echo $f. 'for percorendo <br/>';
					if($f == 5){
						echo 'parei<br/>';
						break;
					}
				}
				echo '-------fim do for com break-----------<br/><br/>';

			//looop for com continue
				echo '-------------inicio do for com continue----<br/>';
				for($f = 1;$f < 20; $f++){
					if($f == 5 || $f == 10 || $f == 15){
						echo 'pulei<br/>';
						continue;
					}
					echo $f.'for percorendo <br/>';			
				}
				echo '---------fim do for com continue--------<br/><br/>';
				echo '<hr/>';		

		//Do While____________________________________________________________________

			//loop do while
				echo '----------------inicio loop x DO WHILE --------------------<br/>';	
				$x = 10;	
				do {
					$x--;
					echo $x.'entrou no do while<br/>';
				} while($x > 0);
				echo 'Saiu do do while<br/>';
				echo '-----------------fim loop x --------------------------------<br/><br/>';

			//loop do while com break
				echo '----------------------inicio loop x1 -----------------------<br/>';	
				$x1 = 1;
				do {
				echo $x1.'parando com break<br/>';
					$x1++;
					if($x1 > 15){
						echo 'parei<br/>';				
						break;
					}
				} while($x1 < 100);
				echo 'Saiu do do while<br/>';
				echo '---------------------------fim loop x1 ----------------------<br/><br/>';

			//loop do while pulando com continue
				echo 'inicio loop x2 <br/>';	
				$x2 = 1;
				do {			
					$x2++;
					if($x2 == 3 || $x2 == 6 || $x2 == 9){
						echo 'pulo<br/>';
						continue;
					}
					echo $x2.'pulando com continue<br/>';			
				} while ($x2 < 10);
				echo 'Saiu do do while<br/>';
				echo 'fim loop x2 <br/><br/>';


				echo '<hr/>';	

		//while_______________________________________________________________________	

			//loop com incremento simples
				echo '-----------inicio loop num WHILE -----------<br/>';	
				$num = 1;	
				while ($num <= 10) {
					echo $num.'loop com incremento simples<br/>';
					$num++;
				}
				echo '----------------------fim loop num------------<br/><br/>';

			//loop com incremento programado
				echo '------------------inicio loop num2-------------<br/>';	
				$num2 = 1;	
				while ($num2 <= 50) {
					echo $num2.'com saltos <br/>';
					$num2 += 5;
				}
				echo '------------------fim loop num2--------------------<br/><br/>';

			//loop com break e if
				echo '------------------inicio loop num3-------------------<br/>';	
				$num3 = 1;	
				while (true) {
					echo $num3.'parando no if com break<br/>';
					$num3 += 5;
					if($num3 > 30){
						echo 'parei<br/>';					
						break;
					}
				}
				echo '---------------------------fim loop num3-----------------<br/><br/>';

			//loop com continue e if pulando elementos
				echo '------------------------inicio loop num-------------------4<br/>';	
				$num4 = 1;	
				while ($num4 < 10) {
					$num4++;
					if($num4 == 3 || $num4 == 6 || $num4 == 9){
						echo 'pulo<br/>';					
						continue;
					}
					echo $num4.'pulando elementos com if e continue<br/>';
				}
				echo '---------------------------fim loop num4---------------------<br/><br/>';

		?>

		
	</body>
</html>