<?php  
/* 4 - Criasse a coneccao com o banco de dados
 * Como a classe é estatica 
 * A chamada da coneccao pode ser feita pela funcao diretamente(não precisa estanciar a classe)
 */
namespace App;

class Connection {

	public static function getDb(){
		try{
			$conn = new \PDO(
				"mysql:host=localhost;dbname=mvc;charset=utf8",
				"root",
				""
			);
			return $conn;
		}	
		catch(\PDOException $e){
			echo "Falha de conexão com o Banco de Dados<br>".$e;
		}
	}

}

?>