<?php
use Slim\Http\Request;
use Slim\Http\Response;


$app->get('/', function (Request $request, Response $response) {

    $data = array('success' => 'Parabéns sua aplicação esta funcionando!');
    return $response->withJson($data);
});