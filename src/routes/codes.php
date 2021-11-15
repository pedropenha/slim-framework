<?php

use Slim\Http\Request;
use Slim\Http\Response;

use App\Models\Codigo;

$app->get('/api/v1/list', function(Request $request, Response $response, array $args){
    $code = Codigo::all();
    return $response->withJson($code);
}); // get para recuperar dados

$app->post('/api/v1/create-code', function(Request $request, Response $response, array $args){
    $data = $request->getParsedBody();
    $code = Codigo::create($data);
    return $response->withJson($code);
}); // post pois é inserção de dados