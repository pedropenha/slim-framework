<?php
// Application middleware

// e.g: $app->add(new \Slim\Csrf\Guard);
$app->add(function ($req, $res, $next){
    $response = $next($req, $res);
    return $response
        ->withHeader('Access-Control-Allow-Origin', '*')
        ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Authorization, Origin, Accept')
        ->withHeader('Access-Control-Allow-Methods', 'GET, POST');
});

