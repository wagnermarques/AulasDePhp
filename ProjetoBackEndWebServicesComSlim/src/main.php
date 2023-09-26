<?php

include_once __DIR__ . "/../vendor/autoload.php";

use App\SystemServices\MonologFactory;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Selective\BasePath\BasePathMiddleware;
use Slim\Factory\AppFactory;

//use App\SystemServices\SlimFactory;


MonologFactory::getInstance()->debug("main executando...");

$app = AppFactory::create();

$app->addRoutingMiddleware();
$app->add(new BasePathMiddleware($app));
$app->addErrorMiddleware(true, true, true);

$app->get('/', function (Request $request, Response $response) {
   $response->getBody()->write('Hello World!');
   return $response;
});

$app->get('/inserirusuario', function (Request $request, Response $response) {
    //executar a logica da sua aplicacao
    $response->getBody()->write('Hello World!');
    return $response;
 });
 
$app->run();


