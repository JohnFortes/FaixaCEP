<?php

namespace Johnfortes\FaixaCep\Controller;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class SiteController
{

    public function indexSite(Request $request, Response $response, $args)
    {

        $response->getBody()->write('teste');

        return $response;
        
    }

    public function indexAdmin(Request $request, Response $response, $args)
    {

        $response->getBody()->write('Admin');

        return $response;
    }
}