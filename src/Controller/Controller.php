<?php

// src/Controller/Controller.php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Controller
{
    /**
     * @Route("/")    
    */
    public function index()
    {
        return new Response(
            '<html><body>Hello world !</body></html>');
    }
}
