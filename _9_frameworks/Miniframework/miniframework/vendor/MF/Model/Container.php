<?php 
/* 5 - criasse a classe container para abstrair a conexão 
 * Que é utilizada nas rotas e importada pelo indexController.php
 */ 

namespace MF\Model;

use App\Connection;

class Container{

	public static function getModel($model){
		$class = "\\App\\Models\\".ucfirst($model);
		$conn = Connection::getDb();
		return new $class($conn);
	}

}	

?>