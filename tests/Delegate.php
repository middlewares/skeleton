<?php

namespace Middlewares\Tests;

use Interop\Http\Middleware\DelegateInterface;
use Psr\Http\Message\RequestInterface;
use Zend\Diactoros\Response;

class Delegate implements DelegateInterface
{
    /**
     * Dispatch the next available middleware and return the response.
     *
     * @param RequestInterface $request
     *
     * @return ResponseInterface
     */
    public function next(RequestInterface $request)
    {
        return new Response();
    }
}
