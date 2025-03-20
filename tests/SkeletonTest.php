<?php

declare(strict_types=1);

namespace Middlewares\Tests;

use Middlewares\Skeleton;
use Middlewares\Utils\Dispatcher;
use Middlewares\Utils\Factory;
use PHPUnit\Framework\TestCase;

class SkeletonTest extends TestCase
{
    public function testSkeleton(): void
    {
        $request = Factory::createServerRequest('GET', '/');

        $response = Dispatcher::run([
            new Skeleton(),
        ], $request);

        $this->assertSame(200, $response->getStatusCode());
    }
}
