<?php

namespace Middlewares\Tests;

use Middlewares\Skeleton;
use Middlewares\Utils\Dispatcher;
use Middlewares\Utils\Factory;

class SkeletonTest extends \PHPUnit_Framework_TestCase
{
    public function testSkeleton()
    {
        $request = Factory::createServerRequest();

        $response = (new Dispatcher([
            new Skeleton(),
        ]))->dispatch($request);

        $this->assertInstanceOf('Psr\\Http\\Message\\ResponseInterface', $response);
    }
}
