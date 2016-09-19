<?php

namespace Middlewares\Tests;

use Middlewares\Middleware;
use Zend\Diactoros\Request;

class MiddlewareTest extends \PHPUnit_Framework_TestCase
{
    public function testMiddleware()
    {
        $middleware = new Middleware();
        $response = $middleware->process(new Request(), new Delegate());

        $this->assertInstanceOf('Psr\\Http\\Message\\ResponseInterface', $response);
    }
}
