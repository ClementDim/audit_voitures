<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class ErrorController
{
    public function show()
    {
        return new Response('Page not found');
    }
}