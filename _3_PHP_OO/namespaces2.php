<?php
	
	//importando bibliotecas
	require "./bibliotecas/lib1/lib1.php";
	require "./bibliotecas/lib2/lib2.php";

	//se não usar o operador 'use' tambem da certo sem apelidos 
	$func1 = new A\Funcionario();
	print_r($func1);
	echo $func1->__get('nome').'<br/>';

	$func = new B\Funcionario();
	print_r($func);
	echo $func->__get('nome').'<br/>';

	//mas...
	//usando apelidos para evitar conflitos
	use A\Funcionario as FuncA;//apelido para diferenciar a referencia com 'use'

	$func1 = new FuncA();
	print_r($func1);
	echo $func1->__get('nome').'<br/>';

	use B\Funcionario as FuncB;

	$func = new FuncB();
	print_r($func);
	echo $func->__get('nome').'<br/>';

?>