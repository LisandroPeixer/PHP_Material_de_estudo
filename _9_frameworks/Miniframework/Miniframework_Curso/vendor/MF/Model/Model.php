<?php 
// 6 - Abstraimos a funcao que conecta banco de dados das classes info.php e produto.php 

namespace MF\Model;

class Model {
	protected $db;
	//funcao que conecta classe com banco de dados
	public function __construct(\PDO $db){
		$this->db = $db;
	}
}

?>