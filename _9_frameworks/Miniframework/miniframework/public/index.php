<?php
	/* 0 - No diretorio publico do framework o index.php carrega todo o conteudo da pasta vendor
	 * na pasta vendor estão os arquivos do 'composer' que é o gerenciador de dependencias do PHP
	 * e estaciamos o objeto 'Route' do framework que é o inicio do roteamento 
	 */

	require_once "../vendor/autoload.php";

	$route = new \App\Route;

/*	
	echo 'Isso está funcionando';

	echo '<hr>';
	echo '<pre>';
	print_r($route->getUrl());
	echo '</pre>';
	
	echo '<hr>';
	echo '<pre>';
	print_r($route->getRoutes());
	echo '</pre>';
*/
	
	
	


?>