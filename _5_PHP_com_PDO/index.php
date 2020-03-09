<?php

	/* Veremos a forma de conexão e transmissão de dados com o database
	 * com o PDO e possivel fazer cnexão com varios banco de dados
	 * mais informações em: https://www.php.net/manual/pt_BR/class.pdoexception.php
	 */

	//Abrindo conexão PDO
		$dsn = 'mysql:host=localhost;dbname=php_com_pdo'; 	//endereço do database
		$usuario = 'root';									//login
		$senha = '';										//senha

		try{
		$conexao = new PDO($dsn, $usuario, $senha);			//Abrindo conexão PDO

	//_________________________________________________

	//Criando tabela	
		$query = '
				create table tb_usuarios(
				id int not null primary key auto_increment,
				nome varchar(50) not null,
				email varchar(100) not null,
				senha varchar(32) not null
				)
			';												//Criando tabela

		$retorno = $conexao->exec($query);					//Executando conexão

		echo $retorno;										//conferindo retorno '0'

	//_________________________________________________

	//Inserindo dados na tabela	
		$query = '
				insert into tb_usuarios(
				nome, email, senha
				) values (
				"michael jackson", "michael@jackson.com", "1234"
				)
			';												//inserindo dados na tabela

		//$retorno = $conexao->exec($query);					//Executando conexão

		echo $retorno;										//conferindo retorno '0'

	//_________________________________________________

	//Deletando dados da tabela	
		$query = '
				delete from tb_usuarios
			';												//Deletando dados da tabela

		//$retorno = $conexao->exec($query);					//Executando conexão

		echo $retorno;										//conferindo retorno '0'

	//_________________________________________________

	//Consultando dados da tabela (todos)
		$query = '
				select * from tb_usuarios
			';												//Consultando dados da tabela

		//$stmt = $conexao->query($query);					//Executando conexão
		//print_r($stmt);										//Informa sucesso de consulta 

		//$lista = $stmt->fetchAll(PDO::FETCH_OBJ);			//atribui consulta a $lista (ASSOC, NUM, BOTH, OBJ)
		//echo('<pre>');
		//print_r($lista);									//Imprime $lista
		//echo('</pre>');

		//echo $lista[4]['nome'].'<br>';						//acessando dados de forma associativa (ASSOC, BOTH)
		//echo $lista[4][2];									//acessando por indices numericos (NUM, BOTH)

		//echo $lista[4]->nome;								//acessando por objeto (OBJ)
	
	//_________________________________________________

	//Consultando dados da tabela (especificando id)
		$query = '
				select * from tb_usuarios where id = 4
			';												//Consultando dados da tabela

		//$stmt = $conexao->query($query);					//Executando conexão
		//print_r($stmt);										//Informa sucesso de consulta 

		//$usuario = $stmt->fetch(PDO::FETCH_BOTH);			//atribui consulta a $lista (ASSOC, NUM, BOTH, OBJ)
		//echo('<pre>');
		//print_r($usuario);									//Imprime $lista
		//echo('</pre>');

		//echo $usuario['nome'].'<br>';						//acessando dados de forma associativa (ASSOC, BOTH)
		//echo $usuario[2];									//acessando por indices numericos (NUM, BOTH)

		//echo $usuario->nome;								//acessando por objeto (OBJ)
	
	//_________________________________________________	

	//Consultando dados da tabela em colunas 'COM FOREACH'
		$query = '
				select * from tb_usuarios
			';												//Consultando dados da tabela

		//Simplificado	
			foreach ($conexao->query($query) as $key => $value) {
				print_r($value);								//array completo
				//echo $value['nome'];							//colunas
				echo "<hr>";
				}	

		//Padrao	
			//$stmt = $conexao->query($query);					//Executando conexão
			//print_r($stmt);										//Informa sucesso de consulta 

			//$lista_usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);		//atribui consulta a $lista (ASSOC, NUM, BOTH, OBJ)
			
			/*	
			foreach($lista_usuarios as $key => $value){
				//print_r($value);								//array completo
				echo $value['nome'];							//colunas
				echo "<hr>";
			}*/
	
	//_________________________________________________
	
	//Tratamento de erros de conexao		
		} catch(PDOException $e){
			/*echo '<pre>';
			print_r($e);
			echo '</pre>';*/
			echo 'Erro 		: '.$e->getCode(). '<br>';
			echo 'Mensagem	: '.$e->getMessage();
		}


?>