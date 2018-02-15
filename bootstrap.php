<?php

require_once 'vendor/autoload.php';

use Psr\Http\Message\RequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

$app = new Slim\App();

$app->get('/', function (Request $req, Response $res) {
    return $res->getBody()->write('Hey, there! You have entered in the quiz dungeon. Should we start to play?');
});

return $app;