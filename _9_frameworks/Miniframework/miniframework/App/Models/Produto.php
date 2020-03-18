<?php  
/* 4.1 - A classe produto tem uma funcao que traz como parametro o \PDO 
 * fazendo com que a coneccao seja incorporada no modelo 
 * 6.1 - funcão que conecta banco de dados herdada de MF\Model\Model 
 */

namespace App\Models;

use MF\Model\Model;

class Produto extends Model{
	
	//funcao que entrega consulta de objetos desta classe
	public function getProdutos(){
		//return array('mesa', 'cadeira');
		$query = "Select id, descricao, preco from tb_produtos";
		return $this->db->query($query)->fetchAll();
	}

}

?>