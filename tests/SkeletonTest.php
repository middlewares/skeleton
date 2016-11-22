<?php

namespace Middlewares\Tests;

use Middlewares\Skeleton;
use Middlewares\Utils\Dispatcher;
use Middlewares\Utils\CallableMiddleware;
use Zend\Diactoros\ServerRequest;
use Zend\Diactoros\Response;

class SkeletonTest extends \PHPUnit_Framework_TestCase
{
    public function testSkeleton()
    {
        $request = new ServerRequest();
        $response = (new Dispatcher([
            new Skeleton(),
            new CallableMiddleware(function () {
                return new Response();
            }),
        ]))->dispatch($request);

        $this->assertInstanceOf('Psr\\Http\\Message\\ResponseInterface', $response);
    }
}
