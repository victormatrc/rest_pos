<?php

use Slim\Http\Request;
use Slim\Http\Response;
use App\Lib\Model\Usuario;

$app->get('/users', function (Request $request, Response $response) {
    $usuario = new Usuario();
    $data = $usuario->getList();
    return $response->withJson($data);
});