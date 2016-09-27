<?php

namespace Middlewares\Tests;

use Middlewares\Boilerplate;
use Zend\Diactoros\Request;
use Zend\Diactoros\Response;
use mindplay\middleman\Dispatcher;

class BoilerplateTest extends \PHPUnit_Framework_TestCase
{
    public function testBoilerplate()
    {
        $response = (new Dispatcher([
            new Boilerplate(),
            function () {
                return new Response();
            },
        ]))->dispatch(new Request());

        $this->assertInstanceOf('Psr\\Http\\Message\\ResponseInterface', $response);
    }
}
