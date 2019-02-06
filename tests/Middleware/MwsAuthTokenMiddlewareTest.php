<?php

declare(strict_types=1);

namespace SellerWorks\Amazon\Tests\Middleware;

use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\Psr7\Request;
use PHPUnit\Framework\TestCase;
use SellerWorks\Amazon\Middleware\MwsAuthTokenMiddleware;

class MwsAuthTokenMiddlewareTest extends TestCase
{
    public function testWithClient(): void
    {
        $stack = HandlerStack::create();
        $stack->push(new MwsAuthTokenMiddleware());

        $container = [];
        $history = Middleware::history($container);
        $stack->push($history);

        $client = new HttpClient([
            'handler' => $stack,
        ]);

        $client->post('http://httpbin.org/post', [
            'Action' => 'GetServiceStatus',
        ]);

        /** @var Request $request */
        $request = $container[0]['request'];

        $this->assertTrue($request->hasHeader('AWSAccessKeyId'));
    }
}
