<?php

namespace App\Exception;

use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;

class GlobalException extends \Exception implements HttpExceptionInterface
{
    public function getStatusCode(): int
    {
        return 404;
    }

    public function getHeaders(): array
    {
        return [];
    }
}
