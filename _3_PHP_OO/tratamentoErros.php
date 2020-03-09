<?php
	/* Tratamento de erros
	 * Com este metodo:
	 * Tentamos executar codigos com possiveis erros pelo 'try'
	 * Capturamos os erros com o 'catch()' aplicando o error para uma variavel 
	 * E finalizamos o tratamento com o 'finally' 
	 * Evitando que a aplicação morra com o erro na execução do codigo.
	 */  
	try{
		 echo "<h3>*** TRY ***</h3>";
		 
		 $sql = 'selec * from clientes';
		 mysql_query($sql);//erro $e esta aqui 'Error'(esse erro e lancado pelo php)
		 
		 if(!file_exists('arquivo.php')){ //erro $ex esta aqui 'Exception' (este erro e lançado intencionalmente)
		 	throw new Exception("Deu ruim | Não tem arquivo.php".date('d/m/Y h:i:s').'<br/>');		 	
		 }

	} catch (Error $e) {// aqui pega o erro aplica na variavel $e e executa a logica descrita

		 echo "<h3>*** CATCH-Error ***</h3>";
		 echo '<p style="color: blue">' .$e. '</p>';

	}  catch (Exception $ex) {//pega o erro aplica na variavel $ex e executa a logica descrita no 'exception'

		 echo "<h3>*** CATCH-Exception ***</h3>";
		 echo '<p style="color: red">' .$ex. '</p>';

	} finally {
		 echo "<h3>*** FINALLY ***</h3>";//opcional(a aplicação continua apos o catch)
	}

?>