<?php

namespace Middlewares\Tests;

use Middlewares\Boilerplate;
use Zend\Diactoros\Request;

class BoilerplateTest extends \PHPUnit_Framework_TestCase
{
    public function testBoilerplate()
    {
        $middleware = new Boilerplate();
        $response = $middleware->process(new Request(), new Delegate());

        $this->assertInstanceOf('Psr\\Http\\Message\\ResponseInterface', $response);
    }
}
