<?php
	
	//print_r($_POST);										//teste de recebimento de form

	/* Aqui estamos tratando da injeção de comandos SQL via formulario
	 * esse tipo de situação pode ocasionar problemas com consultas indevidas
	 * corrompendo o banco de dados
	 */

	//tratando de segurança nas consultas
		if(!empty($_POST['usuario']) && !empty($_POST['senha'])){

		//Abrindo conexão PDO
			$dsn = 'mysql:host=localhost;dbname=php_com_pdo'; 	//endereço do database
			$usuario = 'root';									//login
			$senha = '';										//senha

			try{
				$conexao = new PDO($dsn, $usuario, $senha);		//Abrindo conexão PDO

		//__________________________________________________________
				
		//conexão com SQLInjection (insegura)
			$query = "select * from tb_usuarios where ";		//Selecione da tabela usuarios onde
			$query .= " email = '{$_POST['usuario']}' ";		//email tabela = usuario form
			$query .= " AND senha = '{$_POST['senha']}' ";		//e senha tabela = senha form

			//echo $query;										//verifica se esta recebendo form pelo $query

			//$stmt = $conexao->query($query);					//Executando $conexão
			//$usuario = $stmt->fetch();							//atribui consulta a $usuario

			echo '<pre>';
			//print_r($usuario);									//Imprime $usuario
			echo '</pre>';

			/* No campo senha digite( 1234'; delete from tb_usuarios where 'a' = 'a )
			 * Isso apagara todos os registros da tabela pelo form
			 */
		
		//__________________________________________________________	

		//Impedindo aque aconteça a conexão com SQLInjection ()
			$query = "select * from tb_usuarios where ";
			$query .= " email = :usuario ";
			$query .= " AND senha = :senha ";					//Consultando dados da tabela

			//echo $query;										//verifica se esta recebendo form pelo $query

			$stmt = $conexao->prepare($query);					//Preparando $conexao

			$stmt->bindValue(':usuario', $_POST['usuario']);	//filtrando SQLInjection de usuario
			$stmt->bindValue(':senha', $_POST['senha']);		//filtrando SQLInjection de senha (,PDO::PARAM_INT)

			$stmt->execute();									//Executando conexão

			$usuario = $stmt->fetch();							//atribui consulta a $usuario

			echo '<pre>';
			print_r($usuario);									//Imprime $usuario
			echo '</pre>';

			/* Com o metodo prepare() e possivel encaminhar os dados para o metodo bindValue()
			 * este metodo filtra possiveis SQLInjections dos formularios
			 * mais informações em: https://www.php.net/manual/en/pdostatement.bindvalue
			 */ 

		//__________________________________________________________	
		
		//Tratamento de erros de conexao		
			} catch(PDOException $e){
				echo 'Erro 		: '.$e->getCode(). '<br>';
				echo 'Mensagem	: '.$e->getMessage();
			}

		//__________________________________________________________
			
		}

	//______________________________________________________________	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<meta charset="utf-8">
	</head>
	<body>
		<form action="sqlInjection.php" method="post">
			<input type="text" name="usuario" placeholder="usuario"><br>
			<input type="password" name="senha" placeholder="senha"><br>
			<button type="submit">Enviar</button>
		</form>
	</body>
</html>
