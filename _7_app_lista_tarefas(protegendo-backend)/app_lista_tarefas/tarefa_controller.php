<?php

	require "../../app_lista_tarefas/tarefa.model.php";
	require "../../app_lista_tarefas/tarefa.service.php";
	require "../../app_lista_tarefas/conexao.php";

	$tarefa = new Tarefa();
	$tarefa->__set('tarefa', $_POST['tarefa']);
	$tarefa->__set('tarefa2', $_POST['tarefa2']);//novo

	$conexao = new Conexao();

	$tarefaService = new TarefaService($conexao, $tarefa);
	$tarefaService->inserir();

	//header('Location: nova_tarefa.php?inclusao=1');

	print_r($tarefa);

?>