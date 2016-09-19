<?php

namespace Middlewares;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Interop\Http\Middleware\MiddlewareInterface;
use Interop\Http\Middleware\DelegateInterface;

class Middleware implements MiddlewareInterface
{
    /**
     * Process a client request and return a response.
     *
     * @param RequestInterface  $request
     * @param DelegateInterface $frame
     *
     * @return ResponseInterface
     */
    public function process(RequestInterface $request, DelegateInterface $frame)
    {
        return $frame->next($request);
    }
}
