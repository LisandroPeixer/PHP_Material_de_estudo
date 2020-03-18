<?php
/* 4.1 - A classe info tem uma funcao que traz como parametro o \PDO 
 * fazendo com que a coneccao seja incorporada no modelo  
 * 6.1 - funcão que conecta banco de dados herdada de MF\Model\Model 
 */

namespace App\Models;

use MF\Model\Model;

class Info extends Model{

	//funcao que entrega consulta de objetos desta classe
	public function getInfo(){
		//return array('mesa', 'cadeira');
		$query = "Select titulo, descricao from tb_info";
		return $this->db->query($query)->fetchAll();
	}

}

?>