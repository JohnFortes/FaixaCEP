<?php

namespace Johnfortes\FaixaCep\Controller;

use Johnfortes\FaixaCep\Class\Page;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class SiteController
{

    public function indexSite(Request $request, Response $response, $args)
    {

        $page = new Page([
            'header' => false,
            'footer' => false
        ]);

        $page->setTpl("index");
        exit;
        
    }

    public function indexAdmin(Request $request, Response $response, $args)
    {

        $page = new Page([
            'header' => false,
            'footer' => false
        ]);

        $page->setTpl("admin");
        exit;
    }

    public function adminLogin(Request $request, Response $response, $args)
    {

        $page = new Page([
            'header' => false,
            'footer' => false
        ]);

        $page->setTpl("login");
        exit;
    }
}