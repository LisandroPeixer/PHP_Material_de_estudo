<?php

use Slim\Http\Request;
use Slim\Http\Response;

$app->get('/[{name}]', function(Request $request, Response $response, Array $args){
	$this->logger->info("Slim-Skeleton '/' route");
	return $this->renderer->render($response, 'index.phtml', $args);
});

/*[CORS - 1]*/
$app->options('/{routes:.+}', function ($request, $response, $args) {
    return $response;
});


// Routes
/*[CORS - 4]*/
require __DIR__ . '/routes/autenticacao.php';


/*[SKELETON - 15]*/
require __DIR__ . '/routes/produtos.php';



// Catch-all route to serve a 404 Not Found page if none of the routes match
// NOTE: make sure this route is defined last
/*[CORS - 3]*/
$app->map(['GET', 'POST', 'PUT', 'DELETE', 'PATCH'], '/{routes:.+}', function($req, $res) {
    $handler = $this->notFoundHandler; // handle using the default Slim page not found handler
    return $handler($req, $res);
});


