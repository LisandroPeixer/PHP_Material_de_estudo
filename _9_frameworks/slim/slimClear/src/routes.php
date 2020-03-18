<?php

use Slim\Http\Request;
use Slim\Http\Response;

$app->get('/[{name}]', function(Request $request, Response $response, Array $args){
	$this->logger->info("Slim-Skeleton '/' route");
	return $this->renderer->render($response, 'index.phtml', $args);
});



