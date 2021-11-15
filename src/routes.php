<?php
// Routes

use \Slim\Http\Request;
use \Slim\Http\Response;

$container['db'];

$app->get('/[{name}]', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});

$app->options('/api/{routes:.+}', function ($req, $res, $args){
    return $res;
}); // serve para encontrar qualquer requisição que comece com API

require __DIR__ . '/routes/codes.php';
