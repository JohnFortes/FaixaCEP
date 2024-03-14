<?php

use Johnfortes\FaixaCep\Controller\SiteController;
use Slim\Factory\AppFactory;
use Slim\Routing\RouteCollectorProxy;

session_start();

require_once("vendor/autoload.php");

$app = AppFactory::create();

$app->get('/', [SiteController::class, 'indexSite']);

$app->group('/admin', function(RouteCollectorProxy $group){

    $group->get('', [SiteController::class, 'indexAdmin']);

    $group->map(['GET', 'POST'], '/login', [SiteController::class, 'login']);
});

$app->run();