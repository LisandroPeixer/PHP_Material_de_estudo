<?php


//CRUD
class TarefaService {

	private $conexao;
	private $tarefa;

	public function __construct(Conexao $conexao, Tarefa $tarefa) {
		$this->conexao = $conexao->conectar();
		$this->tarefa = $tarefa;
	}

	public function inserir() { //create
		$query = 'insert into tb_tarefas(tarefa, tarefa2)values(:tarefa, :tarefa2)';//novo
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':tarefa', $this->tarefa->__get('tarefa'));
		$stmt->bindValue(':tarefa2', $this->tarefa->__get('tarefa2'));//novo
		$stmt->execute();
	}

	public function recuperar() { //read

	}

	public function atualizar() { //update

	}

	public function remover() { //delete

	}
}

?>